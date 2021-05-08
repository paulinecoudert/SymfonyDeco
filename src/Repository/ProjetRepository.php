<?php

namespace App\Repository;

use App\Entity\Projet;
use App\Entity\ProjetSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Migrations\Query\Query;
use Doctrine\ORM\Query as ORMQuery;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    /**
     *  @return Projet[]
     * 
     */

    public function findDemandeQuery(ProjetSearch $search): array
    {

        if ($search->getBudget() && $search->getTravaux()) {
            return $this->createQueryBuilder('p')
                ->andWhere('p.budget >= :budget')
                ->andWhere('p.travaux = :travaux')
                ->setParameter('budget', $search->getBudget())
                ->setParameter('travaux', $search->getTravaux())
                ->getQuery()
                ->getResult();
        }
        return $this->findAll();
    }



    /**
     * @return Projet[]
     */

    public function findLatest(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.budget >= 1000')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();
    }



    // /**
    //  * @return Projet[] Returns an array of Projet objects
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
    public function findOneBySomeField($value): ?Projet
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
