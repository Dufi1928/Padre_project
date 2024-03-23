<?php

namespace App\Repository;

use App\Entity\AvailableSpots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AvailableSpots>
 *
 * @method AvailableSpots|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvailableSpots|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvailableSpots[]    findAll()
 * @method AvailableSpots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvailableSpotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvailableSpots::class);
    }

    //    /**
    //     * @return AvailableSpots[] Returns an array of AvailableSpots objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AvailableSpots
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
