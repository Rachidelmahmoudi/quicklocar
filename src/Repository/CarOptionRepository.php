<?php

namespace App\Repository;

use App\Entity\CarOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CarOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarOption[]    findAll()
 * @method CarOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarOption::class);
    }

    // /**
    //  * @return CarOption[] Returns an array of CarOption objects
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
    public function findOneBySomeField($value): ?CarOption
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
