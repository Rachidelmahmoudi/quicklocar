<?php

namespace App\Repository;

use App\Entity\AgencyReview;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AgencyReview|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgencyReview|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgencyReview[]    findAll()
 * @method AgencyReview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgencyReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgencyReview::class);
    }

    // /**
    //  * @return AgencyReview[] Returns an array of AgencyReview objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgencyReview
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
