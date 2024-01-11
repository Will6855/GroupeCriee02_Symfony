<?php

namespace App\Repository;

use App\Entity\Typebac;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Typebac>
 *
 * @method Typebac|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typebac|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typebac[]    findAll()
 * @method Typebac[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypebacRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typebac::class);
    }

//    /**
//     * @return Typebac[] Returns an array of Typebac objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Typebac
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
