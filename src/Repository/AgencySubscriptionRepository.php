<?php

namespace App\Repository;

use App\Entity\AgencySubscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AgencySubscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgencySubscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgencySubscription[]    findAll()
 * @method AgencySubscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgencySubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgencySubscription::class);
    }

    // /**
    //  * @return AgencySubscription[] Returns an array of AgencySubscription objects
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
    public function findOneBySomeField($value): ?AgencySubscription
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
