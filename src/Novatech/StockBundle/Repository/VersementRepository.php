<?php

namespace Novatech\StockBundle\Repository;

/**
 * VersementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VersementRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllVersementByFacture($idFacture)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('v')
            ->from ('StockBundle:Versement','v')
            ->innerJoin('v.facture', 'f')
            ->where('f.id = :idFacture')
            ->setParameter('idFacture',$idFacture)
            ->orderBy('v.id',"DESC")
        ;
        return $query->getQuery()->getResult();
    }
}
