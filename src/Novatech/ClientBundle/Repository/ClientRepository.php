<?php

namespace Novatech\ClientBundle\Repository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastId()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('c.id')
            ->from ('ClientBundle:Client','c')
            ->orderBy('c.id',"DESC")
            ->setMaxResults(1)
        ;
        return $query->getQuery()->getResult();
    }

    public function getAllClient()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('c')
            ->from ('ClientBundle:Client','c')
            ->where('c.etatClient = 0')
            ->orderBy('c.id',"DESC")
        ;
        return $query->getQuery()->getResult();
    }
}
