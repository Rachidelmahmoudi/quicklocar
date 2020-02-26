<?php

namespace App\Repository;

use App\Entity\CarType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CarType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarType[]    findAll()
 * @method CarType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarType::class);
    }

    // /**
    //  * @return CarType[] Returns an array of CarType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CarType
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
