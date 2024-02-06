<?php

namespace App\Repository;

use App\Entity\PAGOSRoberto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAGOSRoberto>
 *
 * @method PAGOSRoberto|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAGOSRoberto|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAGOSRoberto[]    findAll()
 * @method PAGOSRoberto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAGOSRobertoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAGOSRoberto::class);
    }

//    /**
//     * @return PAGOSRoberto[] Returns an array of PAGOSRoberto objects
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

//    public function findOneBySomeField($value): ?PAGOSRoberto
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
