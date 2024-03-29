<?php

namespace Banque\CompteBundle\Repository;

/**
 * CompteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompteRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastId()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('c.id')
            ->from ('CompteBundle:Compte','c')
            ->orderBy('c.id',"DESC")
            ->setMaxResults(1)
        ;
        return $query->getQuery()->getResult();
    }
}
