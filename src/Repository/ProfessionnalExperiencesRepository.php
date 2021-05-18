<?php

namespace App\Repository;

use App\Entity\ProfessionnalExperiences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfessionnalExperiences|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfessionnalExperiences|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfessionnalExperiences[]    findAll()
 * @method ProfessionnalExperiences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfessionnalExperiencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfessionnalExperiences::class);
    }

    // /**
    //  * @return ProfessionnalExperiences[] Returns an array of ProfessionnalExperiences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProfessionnalExperiences
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
