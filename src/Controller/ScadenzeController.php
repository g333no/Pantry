<?php

namespace App\Controller;

use App\Repository\StockEntryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTimeImmutable;
use App\Entity\NotificationSettings;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


#[Route('/scadenze')]
class ScadenzeController extends AbstractController
{
    private function safeMethodExists(mixed $maybeObjOrClass, ?string $method): bool
    {
        if (!is_string($method) || $method === '') {
            return false;
        }
        return (is_object($maybeObjOrClass) || is_string($maybeObjOrClass)) && \method_exists($maybeObjOrClass, $method);
    }


    private function normalizeTagValue(mixed $item): string
    {
        if (is_string($item)) {
            $s = trim($item);

            $inner = trim($s);
            if (str_starts_with($inner, '[') && str_ends_with($inner, ']')) {
                $inner = trim($inner, "[] \t\n\r\0\x0B");
            }

            $decoded = @json_decode($inner, true);
            if (json_last_error() === JSON_ERROR_NONE && $decoded !== null) {
                if (is_array($decoded)) {
                    foreach ($decoded as $el) {
                        if (is_string($el) || is_numeric($el)) return (string)$el;
                        if (is_array($el)) {
                            if (isset($el['value'])) return (string)$el['value'];
                            if (isset($el['name'])) return (string)$el['name'];
                        }
                    }
                } else {
                    if (is_string($decoded) || is_numeric($decoded)) return (string)$decoded;
                    if (is_array($decoded)) {
                        if (isset($decoded['value'])) return (string)$decoded['value'];
                        if (isset($decoded['name'])) return (string)$decoded['name'];
                    }
                }
            }

            if (preg_match('/"value"\s*:\s*"([^"]+)"/u', $s, $m)) return $m[1];
            if (preg_match("/'value'\s*:\s*'([^']+)'/u", $s, $m)) return $m[1];
            if (preg_match('/"name"\s*:\s*"([^"]+)"/u', $s, $m)) return $m[1];
            if (preg_match("/'name'\s*:\s*'([^']+)'/u", $s, $m)) return $m[1];

            $clean = trim($s, " \t\n\r\0\x0B[]\",'");
            return $clean;
        }

        if (is_array($item)) {
            if (isset($item['value'])) return (string)$item['value'];
            if (isset($item['name'])) return (string)$item['name'];
            foreach ($item as $v) {
                if (is_string($v) || is_numeric($v)) return (string)$v;
                if (is_array($v) && isset($v['value'])) return (string)$v['value'];
            }
            return json_encode($item);
        }

        if (is_object($item)) {
            if ($this->safeMethodExists($item, 'getName')) return (string)$item->getName();
            if ($this->safeMethodExists($item, 'getValue')) return (string)$item->getValue();
            if (property_exists($item, 'name')) return (string)$item->name;
            if (property_exists($item, 'value')) return (string)$item->value;
            return (string)$item;
        }

        return (string)$item;
    }

    private function normalizeTagsFromProdotto($prodotto): array
    {
        $tags = [];

        if ($this->safeMethodExists($prodotto, 'getTags')) {
            $t = $prodotto->getTags();

            if (is_string($t)) {
                $s = trim($t);
                if ($s !== '') {
                    $dec = @json_decode($s, true);
                    if (json_last_error() === JSON_ERROR_NONE && $dec !== null) {
                        if (is_array($dec)) {
                            foreach ($dec as $el) $tags[] = $this->normalizeTagValue($el);
                        } else {
                            $tags[] = $this->normalizeTagValue($dec);
                        }
                    } elseif (preg_match_all('/"value"\s*:\s*"([^"]+)"/u', $s, $m)) {
                        foreach ($m[1] as $val) $tags[] = trim($val);
                    } else {
                        $parts = array_filter(array_map('trim', explode(',', $s)));
                        if (count($parts) > 0) {
                            foreach ($parts as $p) $tags[] = $this->normalizeTagValue($p);
                        }
                    }
                }
            }
            elseif (is_array($t) || $t instanceof \Traversable) {
                $arr = is_array($t) ? $t : iterator_to_array($t);

                $stringParts = [];
                $objectParts = [];
                foreach ($arr as $el) {
                    if (is_string($el)) $stringParts[] = $el;
                    else $objectParts[] = $el;
                }

                foreach ($objectParts as $o) {
                    if (is_object($o)) {
                        if ($this->safeMethodExists($o, 'getName')) { $tags[] = $this->normalizeTagValue($o->getName()); continue; }
                        if ($this->safeMethodExists($o, 'getValue')) { $tags[] = $this->normalizeTagValue($o->getValue()); continue; }
                        if ($this->safeMethodExists($o, '__toString')) { $s = (string)$o; if (trim($s) !== '') { $tags[] = $this->normalizeTagValue($s); continue; } }
                        $asArr = (array)$o;
                        $it = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($asArr));
                        foreach ($it as $val) {
                            if (is_string($val) && trim($val) !== '') {
                                if (preg_match('/"value"\s*:\s*"([^"]+)"/u', $val, $m)) $tags[] = trim($m[1]);
                                else $tags[] = trim($val);
                            } elseif (is_numeric($val)) {
                                $tags[] = (string)$val;
                            }
                        }
                    } else {
                        $tags[] = $this->normalizeTagValue($o);
                    }
                }

                if (count($stringParts) > 0) {
                    $joined = trim(stripslashes(implode('', $stringParts)));
                    if ($joined !== '') {
                        if (preg_match_all('/\{[^}]*\}/', $joined, $matches)) {
                            foreach ($matches[0] as $json) {
                                $d = @json_decode($json, true);
                                if (json_last_error() === JSON_ERROR_NONE && $d !== null) $tags[] = $this->normalizeTagValue($d);
                                elseif (preg_match('/"value"\s*:\s*"([^"]+)"/u', $json, $m)) $tags[] = trim($m[1]);
                            }
                        } else {
                            $repair = preg_replace('/}\s*{/', '},{', $joined);
                            if (strpos($repair, '[') !== 0) $repair = '[' . $repair . ']';
                            $dec2 = @json_decode($repair, true);
                            if (json_last_error() === JSON_ERROR_NONE && is_array($dec2) && count($dec2) > 0) {
                                foreach ($dec2 as $el) $tags[] = $this->normalizeTagValue($el);
                            } else {
                                $parts = array_filter(array_map('trim', explode(',', $joined)));
                                foreach ($parts as $p) if ($p !== '') $tags[] = $this->normalizeTagValue($p);
                            }
                        }
                    }
                }
            }
        }
        elseif ($this->safeMethodExists($prodotto, 'getTagsAsString')) {
            $raw = $prodotto->getTagsAsString();
            if (is_string($raw) && $raw !== '') {
                $parts = array_filter(array_map('trim', explode(',', $raw)));
                foreach ($parts as $p) $tags[] = $this->normalizeTagValue($p);
            }
        }

        $tags = array_values(array_unique(array_filter(array_map(function($v){
            if (is_string($v)) return trim($v);
            if (is_scalar($v)) return (string)$v;
            return trim((string)$v);
        }, $tags))));

        return $tags;
    }

    
    #[Route('/', name: 'app_scadenze_index', methods: ['GET', 'POST'])]
    public function index(Request $request, StockEntryRepository $repo, EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        $days = (int) $request->query->get('days', 7);

        $rawEntries = $repo->findExpiringWithinDays($days);

        $today = new DateTimeImmutable('today');
        $entries = [];

        foreach ($rawEntries as $e) {
            $prod = $this->safeMethodExists($e, 'getProdotto') ? $e->getProdotto() : null;
            $sc = $this->safeMethodExists($e, 'getScadenza') ? $e->getScadenza() : null;

            $daysTo = null;
            if ($sc instanceof \DateTimeInterface) {
                $scImmutable = ($sc instanceof DateTimeImmutable) ? $sc : DateTimeImmutable::createFromMutable($sc);
                $diff = $today->diff($scImmutable);
                $sign = ($scImmutable < $today) ? -1 : 1;
                $daysTo = (int) $diff->format('%a') * $sign;
            }

            $categoria = null;
            if ($prod) {
                if ($this->safeMethodExists($prod, 'getCategoria')) $categoria = $prod->getCategoria();
                elseif (property_exists($prod, 'categoria')) $categoria = $prod->categoria;
            }

            $tags = $prod ? $this->normalizeTagsFromProdotto($prod) : [];

            $entries[] = [
                'entry' => $e,
                'prodotto' => $prod,
                'quantita' => $this->safeMethodExists($e, 'getQuantita') ? $e->getQuantita() : (property_exists($e, 'quantita') ? $e->quantita : null),
                'scadenza' => ($sc instanceof \DateTimeInterface) ? $sc->format('Y-m-d') : null,
                'daysTo' => $daysTo,
                'categoria' => $categoria,
                'tags' => $tags,
            ];
        }

        $raw3 = $repo->findExpiringWithinDays(3);
        $entries3Count = is_countable($raw3) ? count($raw3) : 0;

        $uniqueProducts = [];
        $colorCounts = [];

        foreach ($raw3 as $e) {
            $p = $this->safeMethodExists($e, 'getProdotto') ? $e->getProdotto() : null;
            if ($p && $this->safeMethodExists($p, 'getId')) {
                $uniqueProducts[$p->getId()] = $p;
            }

            if ($p) {
                $col = null;
                if ($this->safeMethodExists($p, 'getColore')) $col = $p->getColore();
                elseif (property_exists($p, 'colore')) $col = $p->colore;

                if (is_string($col)) {
                    $col = trim($col);
                    if (preg_match('/^#?[0-9a-fA-F]{6}$/', $col)) {
                        if ($col[0] !== '#') $col = '#' . $col;
                        $colorCounts[$col] = ($colorCounts[$col] ?? 0) + 1;
                    }
                }
            }
        }

        $uniqueProductsCount = count($uniqueProducts);

        $bigCountColor = '#333333'; // fallback
        if (count($colorCounts) > 0) {
            $max = max($colorCounts);
            $candidates = array_keys(array_filter($colorCounts, fn($c) => $c === $max));
            if (count($candidates) === 1) {
                $bigCountColor = $candidates[0];
            } else {
                $idx = array_rand($candidates);
                $bigCountColor = $candidates[$idx];
            }
        } else {
            foreach ($uniqueProducts as $p) {
                if ($this->safeMethodExists($p, 'getColore')) {
                    $c = $p->getColore();
                    if (is_string($c) && preg_match('/^#?[0-9a-fA-F]{6}$/', trim($c))) {
                        $bigCountColor = (trim($c)[0] === '#') ? trim($c) : '#' . trim($c);
                        break;
                    }
                }
            }
        }

        $bigCountTextColor = '#222222';
        try {
            $hex = ltrim($bigCountColor, '#');
            if (strlen($hex) === 6) {
                $r = hexdec(substr($hex,0,2));
                $g = hexdec(substr($hex,2,2));
                $b = hexdec(substr($hex,4,2));
                $lum = (0.2126*$r + 0.7152*$g + 0.0722*$b) / 255;
                $bigCountTextColor = ($lum > 0.6) ? '#222222' : '#ffffff';
            }
        } catch (\Throwable $e) {}

        
        $notificationEmail = null;
        if ($request->isMethod('POST') && $request->request->has('notification_email')) {
            $emailVal = trim((string) $request->request->get('notification_email', ''));
            $repoNS = $em->getRepository(NotificationSettings::class);
            $settings = $repoNS->findOneBy([]);
            if (!$settings) {
                $settings = new NotificationSettings();
            }
            $settings->setEmail($emailVal !== '' ? $emailVal : null);
            $em->persist($settings);
            $em->flush();
            $notificationEmail = $settings->getEmail();

            $this->addFlash('success', 'Email di notifica salvata: ' . ($notificationEmail ?? '(vuota)'));

            if ($notificationEmail) {
                try {
                    $testEmail = (new Email())
                        ->from('no-reply@localhost') 
                        ->to($notificationEmail)
                        ->subject('Test notifiche dispensa')
                        ->text('Questa è una email di test inviata da Pantry per verificare la ricezione delle notifiche di scadenza.')
                        ->html('<p>Questa è una email di test inviata da <strong>Pantry</strong> per verificare la ricezione delle notifiche di scadenza.</p>');

                    $mailer->send($testEmail);
                    $this->addFlash('success', 'Email di test inviata correttamente a ' . $notificationEmail);
                } catch (\Throwable $e) {
                    $this->addFlash('danger', 'Impossibile inviare email di test: ' . $e->getMessage());
                }
            }
        } else {
            $settings = $em->getRepository(NotificationSettings::class)->findOneBy([]);
            $notificationEmail = $settings ? $settings->getEmail() : null;
        }


        return $this->render('scadenze/index.html.twig', [
            'entries' => $entries,
            'days' => $days,
            'expiring_next_3_entries' => $entries3Count,
            'expiring_next_3_unique_products' => $uniqueProductsCount,
            'bigCountColor' => $bigCountColor,
            'bigCountTextColor' => $bigCountTextColor,
            'notification_email' => $notificationEmail,
        ]);
    }
}
