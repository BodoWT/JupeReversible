<?php

namespace App\Repository;

use App\Entity\Nous;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Nous>
 */
class NousRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nous::class);
    }

    //    /**
    //     * @return Nous[] Returns an array of Nous objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('n.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Nous
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
