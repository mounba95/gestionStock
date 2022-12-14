<?php

namespace Novatech\ClientBundle\Repository;

/**
 * FournisseurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FournisseurRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastId()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('f.id')
            ->from ('ClientBundle:Fournisseur','f')
            ->orderBy('f.id',"DESC")
            ->setMaxResults(1)
        ;
        return $query->getQuery()->getResult();
    }

    public function getAllFournisseur()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('c')
            ->from ('ClientBundle:Fournisseur','c')
            ->where('c.etatFournisseur = 0')
            ->orderBy('c.id',"DESC")
        ;
        return $query->getQuery()->getResult();
    }
}
