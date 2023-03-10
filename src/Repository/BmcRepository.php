<?php

namespace App\Repository;

use App\Entity\Bmc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bmc>
 *
 * @method Bmc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bmc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bmc[]    findAll()
 * @method Bmc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BmcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bmc::class);
    }

    public function save(Bmc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Bmc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Bmc[] Returns an array of Bmc objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bmc
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
