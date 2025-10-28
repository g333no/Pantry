<?php

namespace App\Controller;

use App\Entity\Prodotto;
use App\Entity\StockEntry;
use App\Entity\Tag;
use App\Form\ProdottoType;
use App\Repository\ProdottoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

#[Route('/prodotto')]
class ProdottoController extends AbstractController
{

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
	
	#[Route('/', name: 'app_prodotto_index', methods: ['GET'])]
	public function index(Request $request, ProdottoRepository $prodottoRepository): Response
	{
		$sort = $request->query->get('sort', 'nome');     
		$dir  = strtolower($request->query->get('dir', 'asc')) === 'desc' ? 'desc' : 'asc';

		$prodotti = $prodottoRepository->findAll();
$self = $this;
$prodottiArray = array_map(function(Prodotto $prodotto) use ($self) {
    $createdAt = null;
    if ($self->safeMethodExists($prodotto, 'getStockEntries')) {
        try {
            $entries = $prodotto->getStockEntries();
            if ($entries && count($entries) > 0) {
                $first = $entries->first();
                if ($first && $self->safeMethodExists($first, 'getCreatedAt')) {
                    $createdAt = $first->getCreatedAt() ? $first->getCreatedAt()->format('Y-m-d H:i:s') : null;
                }
            }
        } catch (\Throwable $e) {
            $createdAt = null;
        }
    }

    $emoji = $self->safeMethodExists($prodotto, 'getEmoji') ? $prodotto->getEmoji() : null;
    $colore = $self->safeMethodExists($prodotto, 'getColore') ? $prodotto->getColore() : null;
    if (!$colore) $colore = '#ffffff';

    $tags = [];

    if ($self->safeMethodExists($prodotto, 'getTags')) {
        $t = $prodotto->getTags();

        if (is_string($t)) {
            $s = trim($t);
            if ($s !== '') {
                $dec = @json_decode($s, true);
                if (json_last_error() === JSON_ERROR_NONE && $dec !== null) {
                    if (is_array($dec)) {
                        foreach ($dec as $el) $tags[] = $self->normalizeTagValue($el);
                    } else {
                        $tags[] = $self->normalizeTagValue($dec);
                    }
                } else {
                    if (preg_match_all('/"value"\s*:\s*"([^"]+)"/u', $s, $m)) {
                        foreach ($m[1] as $val) $tags[] = trim($val);
                    } else {
                        $parts = array_filter(array_map('trim', explode(',', $s)));
                        if (count($parts) > 1) {
                            foreach ($parts as $p) $tags[] = $self->normalizeTagValue($p);
                        } else {
                            $tags[] = $self->normalizeTagValue($s);
                        }
                    }
                }
            }
        }
        elseif (is_array($t) || $t instanceof \Traversable) {
            $arr = is_array($t) ? $t : iterator_to_array($t);

            $stringParts = [];
            $otherParts = [];
            foreach ($arr as $el) {
                if (is_string($el)) {
                    $stringParts[] = $el;
                } else {
                    $otherParts[] = $el;
                }
            }

            foreach ($otherParts as $o) {
                try {
                    if (is_object($o)) {
                        if ($self->safeMethodExists($o, 'getName')) {
                            $tags[] = $self->normalizeTagValue($o->getName());
                            continue;
                        }
                        if ($self->safeMethodExists($o, 'getValue')) {
                            $tags[] = $self->normalizeTagValue($o->getValue());
                            continue;
                        }
                        if ($self->safeMethodExists($o, 'getTag')) {
                            $tags[] = $self->normalizeTagValue($o->getTag());
                            continue;
                        }
                        if ($self->safeMethodExists($o, '__toString')) {
                            $str = (string)$o;
                            if (trim($str) !== '') {
                                $tags[] = $self->normalizeTagValue($str);
                                continue;
                            }
                        }

                        $asArr = (array)$o;

                        $found = [];
                        $it = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($asArr));
                        foreach ($it as $val) {
                            if (is_string($val)) {
                                $v = trim($val);
                                if ($v === '') continue;
                                if (preg_match('/"value"\s*:\s*"([^"]+)"/u', $v, $m)) {
                                    $found[] = $m[1];
                                } else {
                                    $found[] = $v;
                                }
                            } elseif (is_numeric($val)) {
                                $found[] = (string)$val;
                            }
                        }

                        foreach ($found as $fv) {
                            $fv = trim($fv);
                            if ($fv === '') continue;
                            $tags[] = $self->normalizeTagValue($fv);
                        }

                        continue;
                    }

                    $tags[] = $self->normalizeTagValue($o);
                } catch (\Throwable $e) {
                    try {
                        $tags[] = is_scalar($o) ? (string)$o : ($self->safeMethodExists($o, '__toString') ? (string)$o : '');
                    } catch (\Throwable $_) {}
                }
            }


            try {
                @file_put_contents(__DIR__ . '/../../var/tags_join_debug.log',
                    $prodotto->getId() . ' :: ARR_RAW => ' . json_encode($arr, JSON_UNESCAPED_UNICODE) . PHP_EOL,
                    FILE_APPEND
                );
            } catch (\Throwable $ex) {
            }

            if (count($stringParts) > 0) {
                $joined = implode('', $stringParts);
                $joined = trim($joined);
                $joined_un = stripslashes($joined);

                try {
                    @file_put_contents(__DIR__ . '/../../var/tags_join_debug.log',
                        $prodotto->getId() . ' :: JOINED => ' . mb_substr($joined_un, 0, 4000) . PHP_EOL,
                        FILE_APPEND
                    );
                } catch (\Throwable $ex) {}

                $found = false;
                if (preg_match_all('/\{[^}]*\}/', $joined_un, $matches)) {
                    foreach ($matches[0] as $jsonObjStr) {
                        $jsonObjStr = trim(stripslashes($jsonObjStr));
                        $decoded = @json_decode($jsonObjStr, true);
                        if (json_last_error() === JSON_ERROR_NONE && $decoded !== null) {
                            $tags[] = $self->normalizeTagValue($decoded);
                        } else {
                            if (preg_match('/"value"\s*:\s*"([^"]+)"/u', $jsonObjStr, $mm)) {
                                $tags[] = trim($mm[1]);
                            } else {
                                $clean = trim($jsonObjStr, " \t\n\r\0\x0B[]\",'");
                                if ($clean !== '') $tags[] = $self->normalizeTagValue($clean);
                            }
                        }
                    }
                    $found = true;
                }

                if (!$found) {
                    $repair = preg_replace('/}\s*{/', '},{', $joined_un);
                    if (strpos($repair, '[') !== 0) $repair = '[' . $repair . ']';
                    $dec2 = @json_decode($repair, true);
                    if (json_last_error() === JSON_ERROR_NONE && is_array($dec2) && count($dec2) > 0) {
                        foreach ($dec2 as $el) $tags[] = $self->normalizeTagValue($el);
                        $found = true;
                    }
                }

                if (!$found) {
                    foreach ($stringParts as $p) {
                        $p0 = trim($p);
                        $p1 = stripslashes($p0);
                        $p2 = trim($p1, " \t\n\r\0\x0B");

                        $ok = false;
                        $d = @json_decode($p2, true);
                        if (json_last_error() === JSON_ERROR_NONE && $d !== null) {
                            $tags[] = $self->normalizeTagValue($d);
                            $ok = true;
                        }

                        if (!$ok) {
                            $pClean = trim($p2, "[]");
                            $d2 = @json_decode($pClean, true);
                            if (json_last_error() === JSON_ERROR_NONE && $d2 !== null) {
                                $tags[] = $self->normalizeTagValue($d2);
                                $ok = true;
                            }
                        }

                        if (!$ok) {
                            if (preg_match('/"value"\s*:\s*"([^"]+)"/u', $p2, $mval)) {
                                $tags[] = trim($mval[1]);
                                $ok = true;
                            } elseif (preg_match('/"name"\s*:\s*"([^"]+)"/u', $p2, $mname)) {
                                $tags[] = trim($mname[1]);
                                $ok = true;
                            }
                        }

                        if (!$ok) {
                            $clean = trim($p2, " \t\n\r\0\x0B[]\",'");
                            if ($clean !== '') $tags[] = $self->normalizeTagValue($clean);
                        }
                    }
                }
            }
        }
    }
elseif ($self->safeMethodExists($prodotto, 'getTagsAsString')) {
    $raw = $prodotto->getTagsAsString();
    if (is_string($raw) && $raw !== '') {
        $parts = array_filter(array_map('trim', explode(',', $raw)));
        foreach ($parts as $p) $tags[] = $self->normalizeTagValue($p);
    }
}

$tags = array_values(array_unique(array_filter(array_map(function($v){
    if (is_string($v)) return trim($v);
    if (is_scalar($v)) return (string)$v;
    return trim((string)$v);
}, $tags))));

    return [
        'id' => $prodotto->getId(),
        'nome' => $prodotto->getNome(),
        'quantita' => $self->safeMethodExists($prodotto, 'getQuantita') ? $prodotto->getQuantita() : 0,
        'scadenza' => ($self->safeMethodExists($prodotto, 'getScadenza') && $prodotto->getScadenza()) ? $prodotto->getScadenza()->format('Y-m-d') : null,
        'categoria' => $prodotto->getCategoria(),
        'createdAt' => $createdAt, 
        'emoji' => $emoji ?: '',
        'colore' => $colore,
        'tags' => array_values($tags),
    ];
}, $prodotti);

		$allowed = ['nome','quantita','createdAt','scadenza','categoria'];
		if (!in_array($sort, $allowed, true)) {
			$sort = 'nome';
		}

		usort($prodottiArray, function($a, $b) use ($sort, $dir) {
			$av = $a[$sort] ?? null;
			$bv = $b[$sort] ?? null;

			$dateKeys = ['createdAt','scadenza'];

			if (in_array($sort, $dateKeys, true)) {
				$ad = $av ? strtotime($av) : null;
				$bd = $bv ? strtotime($bv) : null;
				if ($ad === $bd) return 0;
				if ($ad === null) return ($dir === 'asc') ? 1 : -1;
				if ($bd === null) return ($dir === 'asc') ? -1 : 1;
				return ($dir === 'asc') ? ($ad <=> $bd) : ($bd <=> $ad);
			}

			if ($sort === 'quantita') {
				$an = (int) ($av ?? 0);
				$bn = (int) ($bv ?? 0);
				return ($dir === 'asc') ? ($an <=> $bn) : ($bn <=> $an);
			}

			$as = (string) ($av ?? '');
			$bs = (string) ($bv ?? '');
			$cmp = strcasecmp($as, $bs);
			return ($dir === 'asc') ? $cmp : -$cmp;
		});

        $q = (string) $request->query->get('q', '');
        $q = trim($q);
        if ($q !== '') {
            $qLower = mb_strtolower($q);
            $prodottiArray = array_filter($prodottiArray, function($p) use ($qLower) {
                $hay = '';
                if (isset($p['nome'])) $hay .= ' ' . $p['nome'];
                if (isset($p['categoria'])) $hay .= ' ' . $p['categoria'];
                if (isset($p['tags']) && is_array($p['tags'])) $hay .= ' ' . implode(' ', $p['tags']);
                $hay = mb_strtolower($hay);
                return mb_strpos($hay, $qLower) !== false;
            });
            $prodottiArray = array_values($prodottiArray);
        }


        $q = (string) $request->query->get('q', '');
        $q = trim($q);
        if ($q !== '') {
            $qLower = mb_strtolower($q);
            $prodottiArray = array_filter($prodottiArray, function($p) use ($qLower) {
                $hay = '';
                if (isset($p['nome'])) $hay .= ' ' . $p['nome'];
                if (isset($p['categoria'])) $hay .= ' ' . $p['categoria'];
                if (isset($p['tags']) && is_array($p['tags'])) $hay .= ' ' . implode(' ', $p['tags']);
                $hay = mb_strtolower($hay);
                return mb_strpos($hay, $qLower) !== false;
            });
            $prodottiArray = array_values($prodottiArray);
        }


		return $this->render('prodotto/index.html.twig', [
			'prodotti' => $prodottiArray,
			'current_sort' => $sort,
			'current_dir' => $dir,
			'current_q' => $q,
			'current_q' => $q,
		]);
	}

    #[Route('/new', name: 'app_prodotto_new', methods: ['GET', 'POST'])]
	public function new(Request $request, EntityManagerInterface $entityManager): Response
	{
		$prodotto = new Prodotto();
		$form = $this->createForm(ProdottoType::class, $prodotto);

		$form->handleRequest($request);

		try {
            if ($this->safeMethodExists($prodotto, 'getTags') && $prodotto->getTags()->count() > 0 && $form->has('tags_input')) {
                $form->get('tags_input')->setData(implode(', ', array_map(fn($t)=>$t->getName(), $prodotto->getTags()->toArray())));
            }
        } catch (\Throwable $_) {
        }

		$formErrors = [];

		if ($request->isXmlHttpRequest()) {
			if ($form->isSubmitted()) {
				if ($form->isValid()) {
					$tagsRaw = $form->has('tags_input') ? $form->get('tags_input')->getData() : null;
					$this->syncTagsFromString($tagsRaw, $entityManager, $prodotto);

					$entityManager->persist($prodotto);
					$entityManager->flush();

					$stock = new StockEntry();
					$stock->setProdotto($prodotto);
					if ($this->safeMethodExists($prodotto, 'getQuantita')) {
						$stock->setQuantita($prodotto->getQuantita() ?? 1);
					} else {
						$stock->setQuantita(1);
					}
					if ($this->safeMethodExists($prodotto, 'getScadenza') && $prodotto->getScadenza() !== null) {
						$stock->setScadenza($prodotto->getScadenza());
					}
					$stock->setPosizione('Dispensa');

					$entityManager->persist($stock);
					$entityManager->flush();

					return new JsonResponse([
						'success' => true,
						'productId' => $prodotto->getId(),
						'message' => 'Prodotto creato correttamente'
					], Response::HTTP_OK);
				}

				foreach ($form->getErrors(true) as $error) {
					$origin = $error->getOrigin();
					$field = $origin ? $origin->getName() : null;
					$message = $error->getMessage();

					if ($field) {
						if (!isset($formErrors[$field])) {
							$formErrors[$field] = [];
						}
						$formErrors[$field][] = $message;
					} else {
						$formErrors['_global'][] = $message;
					}
				}

				$html = $this->renderView('prodotto/_form_modal.html.twig', [
					'form' => $form->createView(),
					'prodotto' => $prodotto,
					'form_errors' => $formErrors,
				]);

				return new Response($html, Response::HTTP_UNPROCESSABLE_ENTITY);
			}

			$html = $this->renderView('prodotto/_form_modal.html.twig', [
				'form' => $form->createView(),
				'prodotto' => $prodotto,
				'form_errors' => $formErrors,
			]);

			return new Response($html, Response::HTTP_OK);
		}

		if ($form->isSubmitted()) {
			if ($form->isValid()) {
				$tagsRaw = $form->has('tags_input') ? $form->get('tags_input')->getData() : null;
				$this->syncTagsFromString($tagsRaw, $entityManager, $prodotto);
				$entityManager->persist($prodotto);
				$entityManager->flush();

				$stock = new StockEntry();
				$stock->setProdotto($prodotto);
				if ($this->safeMethodExists($prodotto, 'getQuantita')) {
					$stock->setQuantita($prodotto->getQuantita() ?? 1);
				} else {
					$stock->setQuantita(1);
				}
				if ($this->safeMethodExists($prodotto, 'getScadenza') && $prodotto->getScadenza() !== null) {
					$stock->setScadenza($prodotto->getScadenza());
				}
				$stock->setPosizione('Dispensa');

				$entityManager->persist($stock);
				$entityManager->flush();

				$this->addFlash('success', 'Prodotto creato con successo.');
				return $this->redirectToRoute('app_prodotto_index', [], Response::HTTP_SEE_OTHER);
			}

			foreach ($form->getErrors(true) as $error) {
				$origin = $error->getOrigin();
				$field = $origin ? $origin->getName() : null;
				$message = $error->getMessage();

				if ($field) {
					if (!isset($formErrors[$field])) {
						$formErrors[$field] = [];
					}
					$formErrors[$field][] = $message;
				} else {
					$formErrors['_global'][] = $message;
				}
			}

			$this->addFlash('danger', 'Ci sono errori nel form. Controlla i campi segnati.');
		}

		return $this->renderForm('prodotto/new.html.twig', [
			'prodotto' => $prodotto,
			'form' => $form,
			'form_errors' => $formErrors,
		]);
	}


	#[Route('/{id}', name: 'app_prodotto_show', methods: ['GET'])]
	public function show(Prodotto $prodotto): Response
	{
		$tags = $this->normalizeTagsFromProdotto($prodotto);
		
		$createdAt = null;
		if ($this->safeMethodExists($prodotto, 'getStockEntries')) {
			$entries = $prodotto->getStockEntries();
			if ($entries && count($entries) > 0) {
				try {
					$first = $entries->first();
					if ($first && $this->safeMethodExists($first, 'getCreatedAt')) {
						$createdAt = $first->getCreatedAt() ? $first->getCreatedAt()->format('Y-m-d H:i') : null;
					}
				} catch (\Throwable $e) { /* ignore */ }
			}
		}

		return $this->render('prodotto/show.html.twig', [
			'prodotto' => $prodotto,
			'tags' => $tags,
			'createdAt' => $createdAt,
		]);
	}

#[Route('/{id}/fragment', name: 'app_prodotto_fragment', methods: ['GET'])]
public function fragment(Prodotto $prodotto): Response
{
    $createdAt = null;
    if ($this->safeMethodExists($prodotto, 'getStockEntries')) {
        try {
            $entries = $prodotto->getStockEntries();
            if ($entries && count($entries) > 0) {
                $first = $entries->first();
                if ($first && $this->safeMethodExists($first, 'getCreatedAt') && $first->getCreatedAt()) {
                    $createdAt = $first->getCreatedAt()->format('Y-m-d H:i');
                }
            }
        } catch (\Throwable $e) {
            $createdAt = null;
        }
    }

    $tagsArr = $this->normalizeTagsFromProdotto($prodotto);


    return $this->render('prodotto/_card_fragment.html.twig', [
        'prodotto' => $prodotto,
        'createdAt' => $createdAt,
        'tags' => $tagsArr,
    ]);
}


	#[Route('/{id}/edit', name: 'app_prodotto_edit', methods: ['GET', 'POST'])]
	public function edit(Request $request, Prodotto $prodotto, EntityManagerInterface $entityManager): Response
	{
		$form = $this->createForm(ProdottoType::class, $prodotto);

		if ($request->isMethod('GET') && $form->has('tags_input')) {
			$tagsArray = $this->normalizeTagsFromProdotto($prodotto);
			$form->get('tags_input')->setData(implode(', ', $tagsArray));
		}

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$tagsRaw = $form->has('tags_input') ? $form->get('tags_input')->getData() : null;
			$this->syncTagsFromString($tagsRaw, $entityManager, $prodotto);
			$entityManager->flush();

			return $this->redirectToRoute('app_prodotto_index', [], Response::HTTP_SEE_OTHER);
		}

		return $this->renderForm('prodotto/edit.html.twig', [
			'prodotto' => $prodotto,
			'form' => $form,
		]);
	}


    #[Route('/{id}/delete', name: 'app_prodotto_delete', methods: ['POST'])]
    public function delete(Request $request, Prodotto $prodotto, EntityManagerInterface $em): Response
    {
        $tokenId = 'delete' . $prodotto->getId();
        if (! $this->isCsrfTokenValid($tokenId, $request->request->get('_token'))) {
            $this->addFlash('danger', 'Token CSRF non valido. Eliminazione annullata.');
            return $this->redirectToRoute('app_prodotto_index');
        }

        $em->remove($prodotto);
        $em->flush();

        $this->addFlash('success', 'Prodotto eliminato.');

        return $this->redirectToRoute('app_prodotto_index');
    }

    #[Route('/delete-all', name: 'app_prodotto_delete_all', methods: ['POST'])]
    public function deleteAll(Request $request, EntityManagerInterface $em, ProdottoRepository $prodottoRepo): Response
    {
        if (! $this->isCsrfTokenValid('delete_all_products', $request->request->get('_token'))) {
            $this->addFlash('danger', 'Token CSRF non valido. Operazione annullata.');
            return $this->redirectToRoute('app_prodotto_index');
        }

        $prodotti = $prodottoRepo->findAll();

        foreach ($prodotti as $p) {
            $em->remove($p);
        }
        $em->flush();

        $this->addFlash('success', 'Tutti i prodotti sono stati eliminati.');

        return $this->redirectToRoute('app_prodotto_index');
    }

    #[Route('/delete-selected', name: 'app_prodotto_delete_selected', methods: ['POST'])]
    public function deleteSelected(Request $request, EntityManagerInterface $em, ProdottoRepository $prodottoRepo): Response
    {
        if (! $this->isCsrfTokenValid('delete_selected_products', $request->request->get('_token'))) {
            $this->addFlash('danger', 'Token CSRF non valido. Operazione annullata.');
            return $this->redirectToRoute('app_prodotto_index');
        }

        $ids = $request->request->all('selected_ids'); 

        if (!is_array($ids) || count($ids) === 0) {
            $this->addFlash('warning', 'Nessun prodotto selezionato.');
            return $this->redirectToRoute('app_prodotto_index');
        }

        foreach ($ids as $id) {
            $p = $prodottoRepo->find($id);
            if ($p) {
                $em->remove($p);
            }
        }

        $em->flush();

        $this->addFlash('success', sprintf('Eliminati %d prodotti.', count($ids)));

        return $this->redirectToRoute('app_prodotto_index');
    }
	
	private function syncTagsFromString(?string $raw, EntityManagerInterface $em, Prodotto $prodotto): void
	{
		$raw = (string) $raw;
		$parts = array_filter(array_map('trim', explode(',', $raw)), fn($v) => $v !== '');

		$names = array_values(array_unique($parts, SORT_STRING));

		if (count($names) === 0) {
			foreach ($prodotto->getTags()->toArray() as $existingTag) {
				$prodotto->removeTag($existingTag);
			}
			return;
		}

		$lowerToOriginal = [];
		$lowerNames = [];
		foreach ($names as $n) {
			$ln = mb_strtolower($n);
			if (!in_array($ln, $lowerNames, true)) {
				$lowerNames[] = $ln;
				$lowerToOriginal[$ln] = $n;
			}
		}

		$tagRepo = $em->getRepository(Tag::class);

		$qb = $tagRepo->createQueryBuilder('t')
			->andWhere('LOWER(t.name) IN (:names)')
			->setParameter('names', $lowerNames);
		$existingTags = $qb->getQuery()->getResult();

		$existingMap = [];
		foreach ($existingTags as $t) {
			$existingMap[mb_strtolower($t->getName())] = $t;
		}

		$keepTags = [];

		foreach ($lowerNames as $ln) {
			if (isset($existingMap[$ln])) {
				$tag = $existingMap[$ln];
			} else {
				$tag = new Tag();
				$tag->setName($lowerToOriginal[$ln]);
				$em->persist($tag);
			}
			$keepTags[] = $tag;
			if (!$prodotto->getTags()->contains($tag)) {
				$prodotto->addTag($tag);
			}
		}

		foreach ($prodotto->getTags()->toArray() as $existingTag) {
			$ln = mb_strtolower($existingTag->getName());
			$found = false;
			foreach ($keepTags as $kt) {
				if ($kt === $existingTag || mb_strtolower($kt->getName()) === $ln) { $found = true; break; }
			}
			if (!$found) {
				$prodotto->removeTag($existingTag);
			}
		}

		try {
			$em->flush();
		} catch (UniqueConstraintViolationException $e) {
			$em->clear(); 
			$prodottoFresh = $em->getRepository(Prodotto::class)->find($prodotto->getId());
			if ($prodottoFresh instanceof Prodotto) {
				foreach ($lowerNames as $ln) {
					$t = $tagRepo->createQueryBuilder('t')
						->andWhere('LOWER(t.name) = :n')
						->setParameter('n', $ln)
						->getQuery()
						->getOneOrNullResult();
					if ($t && !$prodottoFresh->getTags()->contains($t)) {
						$prodottoFresh->addTag($t);
					}
				}
				$em->flush();
			}
		}
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
	

    #[Route('/{id}/notifications', name: 'app_prodotto_notifications', methods: ['POST'])]
    public function updateNotifications(Request $request, Prodotto $prodotto, EntityManagerInterface $em): Response
    {
        $enabled = (bool)$request->request->get('notifyEnabled', false);
        $email = (bool)$request->request->get('notifyEmail', false);
        $browser = (bool)$request->request->get('notifyBrowser', false);
        $open = (bool)$request->request->get('isOpen', false);

        if ($this->safeMethodExists($prodotto, 'setNotifyEnabled')) {
            $prodotto->setNotifyEnabled($enabled);
        }
        if ($this->safeMethodExists($prodotto, 'setNotifyEmail')) {
            $prodotto->setNotifyEmail($email);
        }
        if ($this->safeMethodExists($prodotto, 'setNotifyBrowser')) {
            $prodotto->setNotifyBrowser($browser);
        }

        if ($open) {
            $oggi = new \DateTimeImmutable('today');
            $apertoUntil = $oggi->add(new \DateInterval('P4D'));

            $sc = null;
            if ($this->safeMethodExists($prodotto, 'getScadenza')) {
                $sc = $prodotto->getScadenza();
            }

            if ($sc === null || ($sc instanceof \DateTimeInterface && $sc > $apertoUntil)) {
                if ($this->safeMethodExists($prodotto, 'setScadenza')) {
                    $prodotto->setScadenza($apertoUntil);
                }
            }

            if ($this->safeMethodExists($prodotto, 'setIsOpen')) {
                $prodotto->setIsOpen(true);
            }
        } else {
            if ($this->safeMethodExists($prodotto, 'setIsOpen')) {
                $prodotto->setIsOpen(false);
            }
        }

        $em->persist($prodotto);
        $em->flush();

        return $this->redirectToRoute('app_prodotto_show', ['id' => $prodotto->getId()]);
    }


    private function safeMethodExists(mixed $maybeObjOrClass, ?string $method): bool
    {
        if (!is_string($method) || $method === '') {
            return false;
        }
        return (is_object($maybeObjOrClass) || is_string($maybeObjOrClass)) && \method_exists($maybeObjOrClass, $method);
    }


}
