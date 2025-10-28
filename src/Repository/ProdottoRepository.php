<?php

namespace App\Repository;

use App\Entity\Prodotto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProdottoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prodotto::class);
    }
	public function findDistinctCategories(): array
	{
		$qb = $this->createQueryBuilder('p')
			->select('DISTINCT p.categoria')
			->where('p.categoria IS NOT NULL')
			->andWhere('p.categoria <> :empty')
			->setParameter('empty', '')
			->orderBy('p.categoria', 'ASC');

		$rows = $qb->getQuery()->getScalarResult();

		return array_map(fn($r) => $r['categoria'], $rows);
	}

	public function findByTagName(string $tagName)
	{
		return $this->createQueryBuilder('p')
			->join('p.tags', 't')
			->andWhere('t.name = :name')
			->setParameter('name', mb_strtolower($tagName))
			->getQuery()
			->getResult();
	}	
}
