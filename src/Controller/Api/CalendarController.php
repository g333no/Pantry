<?php

namespace App\Controller\Api;

use App\Repository\StockEntryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{

private function normalizeTagValue(mixed $item): string
{
    // stringhe: prova json, poi regex "value"/"name", poi cleanup plain
    if (is_string($item)) {
        $s = trim($item);

        // se è qualcosa come '[{"value":"x"}]' togli bracket esterni per decodificare il corpo
        $inner = trim($s);
        if (str_starts_with($inner, '[') && str_ends_with($inner, ']')) {
            $inner = trim($inner, "[] \t\n\r\0\x0B");
        }

        // prova json decode sul contenuto
        $decoded = @json_decode($inner, true);
        if (json_last_error() === JSON_ERROR_NONE && $decoded !== null) {
            // se è array/lista
            if (is_array($decoded)) {
                // cerca 'value' o 'name' nel primo elemento utile
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

        // regex: cerca "value":"..." o 'value':'...' o "name":"..."
        if (preg_match('/"value"\s*:\s*"([^"]+)"/u', $s, $m)) return $m[1];
        if (preg_match("/'value'\s*:\s*'([^']+)'/u", $s, $m)) return $m[1];
        if (preg_match('/"name"\s*:\s*"([^"]+)"/u', $s, $m)) return $m[1];
        if (preg_match("/'name'\s*:\s*'([^']+)'/u", $s, $m)) return $m[1];

        // fallback: rimuovi parentesi/virgolette residue e ritorna il testo pulito
        $clean = trim($s, " \t\n\r\0\x0B[]\",'");
        return $clean;
    }

    // array: cerca chiave value/name, altrimenti prendi primo scalar
    if (is_array($item)) {
        if (isset($item['value'])) return (string)$item['value'];
        if (isset($item['name'])) return (string)$item['name'];
        foreach ($item as $v) {
            if (is_string($v) || is_numeric($v)) return (string)$v;
            if (is_array($v) && isset($v['value'])) return (string)$v['value'];
        }
        return json_encode($item);
    }

    // oggetto: prova getName/getValue o proprietà
    if (is_object($item)) {
        if (method_exists($item, 'getName')) return (string)$item->getName();
        if (method_exists($item, 'getValue')) return (string)$item->getValue();
        if (property_exists($item, 'name')) return (string)$item->name;
        if (property_exists($item, 'value')) return (string)$item->value;
        // fallback a string cast
        return (string)$item;
    }

    // altro (scalar)
    return (string)$item;
}

private function normalizeTagsFromProdotto($prodotto): array
{
    $tags = [];

    // prova a prendere i tags dal prodotto
    if (method_exists($prodotto, 'getTags')) {
        $t = $prodotto->getTags();

        // caso: stringa
        if (is_string($t)) {
            $s = trim($t);
            if ($s !== '') {
                // prova JSON pieno
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
        // caso: array / Traversable (ArrayCollection di Doctrine probabile)
        elseif (is_array($t) || $t instanceof \Traversable) {
            $arr = is_array($t) ? $t : iterator_to_array($t);

            // separa stringhe da oggetti
            $stringParts = [];
            $objectParts = [];
            foreach ($arr as $el) {
                if (is_string($el)) $stringParts[] = $el;
                else $objectParts[] = $el;
            }

            // processa gli oggetti (Tag entity ecc.)
            foreach ($objectParts as $o) {
                if (is_object($o)) {
                    if (method_exists($o, 'getName')) { $tags[] = $this->normalizeTagValue($o->getName()); continue; }
                    if (method_exists($o, 'getValue')) { $tags[] = $this->normalizeTagValue($o->getValue()); continue; }
                    if (method_exists($o, '__toString')) { $s = (string)$o; if (trim($s) !== '') { $tags[] = $this->normalizeTagValue($s); continue; } }
                    // fallback: cast e ricerca valore stringa
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
                    // non-object fallback
                    $tags[] = $this->normalizeTagValue($o);
                }
            }

            // processa i pezzi stringa (ricomponi e prova a parsare)
            if (count($stringParts) > 0) {
                $joined = trim(stripslashes(implode('', $stringParts)));
                if ($joined !== '') {
                    // estrai oggetti { ... } se presenti
                    if (preg_match_all('/\{[^}]*\}/', $joined, $matches)) {
                        foreach ($matches[0] as $json) {
                            $d = @json_decode($json, true);
                            if (json_last_error() === JSON_ERROR_NONE && $d !== null) $tags[] = $this->normalizeTagValue($d);
                            elseif (preg_match('/"value"\s*:\s*"([^"]+)"/u', $json, $m)) $tags[] = trim($m[1]);
                        }
                    } else {
                        // prova decode come array riparato
                        $repair = preg_replace('/}\s*{/', '},{', $joined);
                        if (strpos($repair, '[') !== 0) $repair = '[' . $repair . ']';
                        $dec2 = @json_decode($repair, true);
                        if (json_last_error() === JSON_ERROR_NONE && is_array($dec2) && count($dec2) > 0) {
                            foreach ($dec2 as $el) $tags[] = $this->normalizeTagValue($el);
                        } else {
                            // fallback CSV / testo
                            $parts = array_filter(array_map('trim', explode(',', $joined)));
                            foreach ($parts as $p) if ($p !== '') $tags[] = $this->normalizeTagValue($p);
                        }
                    }
                }
            }
        }
    }
    // fallback: getTagsAsString se esiste
    elseif (method_exists($prodotto, 'getTagsAsString')) {
        $raw = $prodotto->getTagsAsString();
        if (is_string($raw) && $raw !== '') {
            $parts = array_filter(array_map('trim', explode(',', $raw)));
            foreach ($parts as $p) $tags[] = $this->normalizeTagValue($p);
        }
    }

    // cleanup: trim, unique, remove empty
    $tags = array_values(array_unique(array_filter(array_map(function($v){
        if (is_string($v)) return trim($v);
        if (is_scalar($v)) return (string)$v;
        return trim((string)$v);
    }, $tags))));

    return $tags;
}


    #[Route('/api/calendar-events', name: 'api_calendar_events', methods: ['GET'])]
    public function events(StockEntryRepository $repo): JsonResponse
    {
        // Recupera tutte le stock entries ordinate per scadenza (repository esistente)
        $entries = $repo->findAllOrderedByScadenza();

        $items = [];

        foreach ($entries as $e) {
            $prod = $e->getProdotto();
            if (!$prod) {
                continue;
            }

            // normalize tags per prodotto (ASSICURA array<string>)
            $tags = $prod ? $this->normalizeTagsFromProdotto($prod) : [];

            $createdAt = $e->getCreatedAt();   // DateTime|null
            $scadenza  = $e->getScadenza();    // DateTime|null

            $items[] = [
                'stockEntryId' => $e->getId(),
                'prodottoId'   => $prod->getId(),
                'nome'         => $prod->getNome(),
                'emoji'        => $prod->getEmoji(),
                'color'        => $prod->getColore() ?: '#999999',
                'quantita'     => $e->getQuantita(),
                'posizione'    => $e->getPosizione(),
                'createdAt'    => $createdAt,
                'scadenza'     => $scadenza,
                'tags'         => $tags, // <<--- qui abbiamo l'array già normalizzato
            ];
        }

        // Ordina e costruisci events/extrasByDate come prima, ma prendi tags dall'array $items
        usort($items, function($a, $b) {
            $sa = $a['scadenza'] instanceof \DateTimeInterface ? $a['scadenza']->getTimestamp() : PHP_INT_MAX;
            $sb = $b['scadenza'] instanceof \DateTimeInterface ? $b['scadenza']->getTimestamp() : PHP_INT_MAX;
            if ($sa === $sb) {
                $ca = $a['createdAt'] instanceof \DateTimeInterface ? $a['createdAt']->getTimestamp() : 0;
                $cb = $b['createdAt'] instanceof \DateTimeInterface ? $b['createdAt']->getTimestamp() : 0;
                if ($ca === $cb) {
                    return (int)$a['stockEntryId'] <=> (int)$b['stockEntryId'];
                }
                return $ca <=> $cb;
            }
            return $sa <=> $sb;
        });

        $events = [];
        $extrasByDate = [];

        foreach ($items as $m) {
            $startDateObj = $m['scadenza'] instanceof \DateTimeInterface ? clone $m['scadenza'] : null;
            $start = $startDateObj ? $startDateObj->format('Y-m-d') : null;
            $end = null;
            if ($startDateObj instanceof \DateTimeInterface) {
                $end = (clone $startDateObj)->modify('+1 day')->format('Y-m-d');
            }

            $titleEmoji = trim(($m['emoji'] ? ($m['emoji'] . ' ') : '') . ($m['nome'] ?? ''));

            $events[] = [
                'id' => 'stock-' . $m['stockEntryId'],
                'title' => $titleEmoji,
                'start' => $start,
                'end' => $end,
                'allDay' => true,
                'backgroundColor' => $m['color'],
                'borderColor' => $m['color'],
                'extendedProps' => [
                    'stockEntryId' => $m['stockEntryId'],
                    'prodottoId' => $m['prodottoId'],
                    'quantita' => $m['quantita'],
                    'posizione' => $m['posizione'],
                    'emoji' => $m['emoji'],
                    'color' => $m['color'],
                    'createdAt' => $m['createdAt'] instanceof \DateTimeInterface ? $m['createdAt']->format('Y-m-d') : null,
                    'scadenza' => $m['scadenza'] instanceof \DateTimeInterface ? $m['scadenza']->format('Y-m-d') : null,
                    'nome' => $m['nome'],
                    'tags' => $m['tags'], // <-- tags normalizzati qui
                ],
            ];

            if ($m['scadenza'] instanceof \DateTimeInterface) {
                $dateKey = $m['scadenza']->format('Y-m-d');
                if (!isset($extrasByDate[$dateKey])) $extrasByDate[$dateKey] = [];
                $extrasByDate[$dateKey][] = [
                    'id' => $m['prodottoId'],
                    'stockEntryId' => $m['stockEntryId'],
                    'nome' => $m['nome'],
                    'emoji' => $m['emoji'],
                    'color' => $m['color'],
                    'createdAt' => $m['createdAt'] instanceof \DateTimeInterface ? $m['createdAt']->format('Y-m-d') : null,
                    'scadenza' => $m['scadenza']->format('Y-m-d'),
                    'tags' => $m['tags'],
                ];
            }
        }

        foreach ($extrasByDate as $k => $arr) {
            usort($arr, function($a, $b) {
                $sa = isset($a['scadenza']) && $a['scadenza'] ? strtotime($a['scadenza']) : PHP_INT_MAX;
                $sb = isset($b['scadenza']) && $b['scadenza'] ? strtotime($b['scadenza']) : PHP_INT_MAX;
                if ($sa === $sb) {
                    $ca = isset($a['createdAt']) && $a['createdAt'] ? strtotime($a['createdAt']) : 0;
                    $cb = isset($b['createdAt']) && $b['createdAt'] ? strtotime($b['createdAt']) : 0;
                    return $ca <=> $cb;
                }
                return $sa <=> $sb;
            });
            $extrasByDate[$k] = $arr;
        }

        return $this->json([
            'events' => $events,
            'extrasByDate' => $extrasByDate,
        ]);
    }


}
