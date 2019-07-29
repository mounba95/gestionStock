<?php

namespace Novatech\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tva
 *
 * @ORM\Table(name="tva")
 * @ORM\Entity(repositoryClass="Novatech\StockBundle\Repository\TvaRepository")
 */
class Tva
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="tvaFacture", type="integer")
     */
    private $tvaFacture;

     /**
     * @var string
     *
     * @ORM\Column(name="referenceTva", type="string", length=255)
     */
    private $referenceTva;

     /**
     * @ORM\OneToMany(targetEntity="Facture", mappedBy="tva")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=true)
     */
    private $facture;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tvaFacture
     *
     * @param integer $tvaFacture
     *
     * @return Tva
     */
    public function setTvaFacture($tvaFacture)
    {
        $this->tvaFacture = $tvaFacture;

        return $this;
    }

    /**
     * Get tvaFacture
     *
     * @return int
     */
    public function getTvaFacture()
    {
        return $this->tvaFacture;
    }

    /**
     * Set referenceTva
     *
     * @param string $referenceTva
     *
     * @return Fature
     */
    public function setReferenceTva($referenceTva)
    {
        $this->referenceTva = $referenceTva;

        return $this;
    }

    /**
     * Get referenceTva
     *
     * @return string
     */
    public function getReferenceTva()
    {
        return $this->referenceTva;
    }


    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
     return $this->getReferenceTva(); 
    }
}

