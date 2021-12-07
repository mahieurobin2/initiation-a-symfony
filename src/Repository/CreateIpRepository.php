<?php

namespace App\Repository;

use App\Entity\CreateIp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CreateIp|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreateIp|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreateIp[]    findAll()
 * @method CreateIp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreateIpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreateIp::class);
    }

    // /**
    //  * @return CreateIp[] Returns an array of CreateIp objects
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
    public function findOneBySomeField($value): ?CreateIp
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
