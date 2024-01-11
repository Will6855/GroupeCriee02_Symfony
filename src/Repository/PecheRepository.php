<?php

namespace App\Repository;

use App\Entity\Peche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Peche>
 *
 * @method Peche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Peche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Peche[]    findAll()
 * @method Peche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PecheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Peche::class);
    }

//    /**
//     * @return Peche[] Returns an array of Peche objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Peche
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
