<?php

namespace App\Entity;

use App\Repository\StockEntryRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Prodotto;

#[ORM\Entity(repositoryClass: StockEntryRepository::class)]
class StockEntry
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Prodotto::class, inversedBy: 'stockEntries')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Prodotto $prodotto = null;

    #[ORM\Column(type:'integer')]
    private int $quantita = 0;

    #[ORM\Column(type:'datetime', nullable: true)]
    private ?\DateTimeInterface $scadenza = null;

    #[ORM\Column(type:'string', length:100, nullable:true)]
    private ?string $posizione = null; 

    #[ORM\Column(type:'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdotto(): ?Prodotto
    {
        return $this->prodotto;
    }

    public function setProdotto(?Prodotto $prodotto): self
    {
        $this->prodotto = $prodotto;
        return $this;
    }

    public function getQuantita(): int
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

    public function getPosizione(): ?string
    {
        return $this->posizione;
    }

    public function setPosizione(?string $posizione): self
    {
        $this->posizione = $posizione;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
