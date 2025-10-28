<?php

namespace App\Entity;

use App\Repository\ProdottoRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\StockEntry;
use App\Entity\Tag;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


#[ORM\Entity(repositoryClass: ProdottoRepository::class)]
class Prodotto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Il nome del prodotto non può essere vuoto.')]
    private ?string $nome = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotNull(message: 'La quantità è obbligatoria.')]
    #[Assert\Type(type: 'integer', message: 'La quantità deve essere un numero intero.')]
    #[Assert\GreaterThanOrEqual(value: 0, message: 'La quantità non può essere negativa.')]
    private ?int $quantita = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $scadenza = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $categoria = null;

    #[ORM\Column(type: 'string', length: 7, nullable: true)]
    private ?string $colore = null;

    #[ORM\Column(type: 'string', length: 8, nullable: true)]
    private ?string $emoji = null;

    #[ORM\OneToMany(mappedBy: 'prodotto', targetEntity: StockEntry::class, cascade: ['remove'], orphanRemoval: true)]
    private Collection $stockEntries;

    #[ORM\ManyToMany(targetEntity: Tag::class, cascade: ["persist"])]
    #[ORM\JoinTable(name: "prodotto_tag")]
    private Collection $tags;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $notifyEnabled = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $notifyEmail = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $notifyBrowser = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $isOpen = false;

    public function __construct()
    {
        $this->stockEntries = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getQuantita(): ?int
    {
        return $this->quantita;
    }

    public function setQuantita(int $quantita): self
    {
        $this->quantita = $quantita;
        return $this;
    }

    public function getScadenza(): ?\DateTimeInterface
    {
        return $this->scadenza;
    }

    public function setScadenza(?\DateTimeInterface $scadenza): self
    {
        $this->scadenza = $scadenza;
        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(?string $categoria): self
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function getColore(): ?string
    {
        return $this->colore;
    }

    public function setColore(?string $colore): self
    {
        $this->colore = $colore;
        return $this;
    }

    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    public function setEmoji(?string $emoji): self
    {
        $this->emoji = $emoji;
        return $this;
    }

    /**
     * @return Collection|StockEntry[]
     */
    public function getStockEntries(): Collection
    {
        return $this->stockEntries;
    }

    /** @return Collection|Tag[] */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addStockEntry(StockEntry $stockEntry): self
    {
        if (!$this->stockEntries->contains($stockEntry)) {
            $this->stockEntries->add($stockEntry);
            $stockEntry->setProdotto($this);
        }
        return $this;
    }

    public function removeStockEntry(StockEntry $stockEntry): self
    {
        if ($this->stockEntries->removeElement($stockEntry)) {
            if ($stockEntry->getProdotto() === $this) {
                $stockEntry->setProdotto(null);
            }
        }
        return $this;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags->add($tag);
        }
        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $this->tags->removeElement($tag);
        return $this;
    }

    public function isNotifyEnabled(): bool
    {
        return (bool) $this->notifyEnabled;
    }

    public function setNotifyEnabled(bool $v): self
    {
        $this->notifyEnabled = $v;
        return $this;
    }

    public function isNotifyEmail(): bool
    {
        return (bool) $this->notifyEmail;
    }

    public function setNotifyEmail(bool $v): self
    {
        $this->notifyEmail = $v;
        return $this;
    }

    public function isNotifyBrowser(): bool
    {
        return (bool) $this->notifyBrowser;
    }

    public function setNotifyBrowser(bool $v): self
    {
        $this->notifyBrowser = $v;
        return $this;
    }

    public function isOpen(): bool
    {
        return (bool) $this->isOpen;
    }

    public function setIsOpen(bool $v): self
    {
        $this->isOpen = $v;

        if ($v) {
            try {
                $tz = new \DateTimeZone('Europe/Rome');

                $target = new \DateTimeImmutable('now', $tz);
                $target = $target->modify('+4 days');
                $target = \DateTimeImmutable::createFromFormat('Y-m-d', $target->format('Y-m-d'));

                $current = null;
                if ($this->scadenza instanceof \DateTimeInterface) {
                    $current = ($this->scadenza instanceof \DateTimeImmutable)
                        ? $this->scadenza
                        : \DateTimeImmutable::createFromMutable($this->scadenza);
                    $current = \DateTimeImmutable::createFromFormat('Y-m-d', $current->format('Y-m-d'));
                }

                if ($current === null || $current > $target) {
                    $this->scadenza = $target;
                }
            } catch (\Throwable $e) {
            }
        }

        return $this;
    }

    #[Assert\Callback]
    public function validateScadenza(ExecutionContextInterface $context): void
    {
        if ($this->scadenza instanceof \DateTimeInterface) {
            $tz = new \DateTimeZone('Europe/Rome');
            $today = new \DateTimeImmutable('today', $tz);

            $exp = \DateTimeImmutable::createFromFormat('Y-m-d', $this->scadenza->format('Y-m-d'));
            if ($exp < $today) {
                $context->buildViolation('La data di scadenza non può essere precedente alla data odierna.')
                    ->atPath('scadenza')
                    ->addViolation();
            }
        }
    }
}
