<?php

namespace App\Repository;

use App\Entity\StockEntry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use \DateTimeImmutable;

class StockEntryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockEntry::class);
    }

    public function findExpiringWithinDays(?int $days = 7): array
    {
        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.scadenza IS NOT NULL');

        if ($days !== null) {
            $now = new DateTimeImmutable('now');
            $limit = $now->modify("+{$days} days");
            $qb->andWhere('s.scadenza <= :limit')
               ->andWhere('s.scadenza >= :now')
               ->setParameter('now', $now)
               ->setParameter('limit', $limit);
        }

        $qb->orderBy('s.scadenza', 'ASC');

        return $qb->getQuery()->getResult();
    }

    /**
     *
     * @return StockEntry[]
     */
    public function findAllOrderedByScadenza(): array
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.prodotto', 'p')
            ->addSelect('p')
            ->orderBy("CASE WHEN s.scadenza IS NULL THEN 1 ELSE 0 END", 'ASC')
            ->addOrderBy('s.scadenza', 'ASC')
            ->addOrderBy('s.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     *
     * @return array<int, array<string,mixed>>
     */
    public function findAllForCalendar(): array
    {
        $qb = $this->createQueryBuilder('s')
            ->select([
                's.id AS stock_id',
                'p.id AS prodotto_id',
                'p.nome AS nome_prodotto',
                'p.emoji AS emoji',
                's.scadenza AS scadenza',
                's.createdAt AS created_at',
                'COALESCE(p.colore, s.colore, \'#999999\') AS color',
                's.quantita AS quantita',
                's.posizione AS posizione'
            ])
            ->leftJoin('s.prodotto', 'p')
            // ->andWhere('s.quantita > 0')
            ->orderBy('s.scadenza', 'ASC');

        return $qb->getQuery()->getArrayResult();
    }
}
