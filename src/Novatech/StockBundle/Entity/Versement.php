<?php

namespace Novatech\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Versement
 *
 * @ORM\Table(name="versement")
 * @ORM\Entity(repositoryClass="Novatech\StockBundle\Repository\VersementRepository")
 */
class Versement
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
     * @ORM\Column(name="montantVersement", type="integer")
     */
    private $montantVersement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(nullable=true,name="dateVersement", type="datetime")
     */
    private $dateVersement;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatVersement", type="boolean")
     */
    private $etatVersement;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true,name="descriptionVersement", type="text")
     */
    private $descriptionVersement;

    /**
     * @ORM\ManyToOne(targetEntity="Facture", inversedBy ="versement")
     * @ORM\JoinColumn(nullable=true,name = "facture_id",referencedColumnName ="id")
     */
    private $facture;

    /**
     * @ORM\ManyToOne(targetEntity="userManagerBundle\Entity\User", inversedBy ="versement")
     * @ORM\JoinColumn(nullable=true,name = "user_id",referencedColumnName ="id")
     */
    private $user;


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
     * Set montantVersement
     *
     * @param integer $montantVersement
     *
     * @return Versement
     */
    public function setMontantVersement($montantVersement)
    {
        $this->montantVersement = $montantVersement;

        return $this;
    }

    /**
     * Get montantVersement
     *
     * @return int
     */
    public function getMontantVersement()
    {
        return $this->montantVersement;
    }

    /**
     * Set dateVersement
     *
     * @param \DateTime $dateVersement
     *
     * @return Versement
     */
    public function setDateVersement($dateVersement)
    {
        $this->dateVersement = $dateVersement;

        return $this;
    }

    /**
     * Get dateVersement
     *
     * @return \DateTime
     */
    public function getDateVersement()
    {
        return $this->dateVersement;
    }

    /**
     * Set etatVersement
     *
     * @param boolean $etatVersement
     *
     * @return Versement
     */
    public function setEtatVersement($etatVersement)
    {
        $this->etatVersement = $etatVersement;

        return $this;
    }

    /**
     * Get etatVersement
     *
     * @return bool
     */
    public function getEtatVersement()
    {
        return $this->etatVersement;
    }

    /**
     * Set descriptionVersement
     *
     * @param string $descriptionVersement
     *
     * @return Versement
     */
    public function setDescriptionVersement($descriptionVersement)
    {
        $this->descriptionVersement = $descriptionVersement;

        return $this;
    }

    /**
     * Get descriptionVersement
     *
     * @return string
     */
    public function getDescriptionVersement()
    {
        return $this->descriptionVersement;
    }

    /**
     * Set facture
     *
     * @param \Novatech\StockBundle\Entity\Facture $facture
     *
     * @return Versement
     */
    public function setFacture(\Novatech\StockBundle\Entity\Facture $facture)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \Novatech\StockBundle\Entity\Facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set user
     *
     * @param \userManagerBundle\Entity\User $user
     *
     * @return Versement
     */
    public function setUser(\userManagerBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \userManagerBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

