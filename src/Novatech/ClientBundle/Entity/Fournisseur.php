<?php

namespace Novatech\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="Novatech\ClientBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @var string
     *
     * @ORM\Column(name="nomFournisseur", type="string", length=255)
     */
    private $nomFournisseur;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroFournisseur", type="integer")
     */
    private $numeroFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseFournisseur", type="string", length=255, nullable=true)
     */
    private $adresseFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="emailFournisseur", type="string", length=255, nullable=true)
     */
    private $emailFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="referenceFournisseur", type="string", length=255)
     */
    private $referenceFournisseur;
    
    /**
     * @var int
     *
     * @ORM\Column(name="etatFournisseur", type="integer")
     */
    private $etatFournisseur;

    /**
     * @ORM\OneToMany(targetEntity="Novatech\StockBundle\Entity\StockFournisseur", mappedBy="fournisseur")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $stockFournisseur;

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
     * Set nomFournisseur
     *
     * @param string $nomFournisseur
     *
     * @return Fournisseur
     */
    public function setNomFournisseur($nomFournisseur)
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }

    /**
     * Get nomFournisseur
     *
     * @return string
     */
    public function getNomFournisseur()
    {
        return $this->nomFournisseur;
    }


    /**
     * Set referenceFournisseur
     *
     * @param string $referenceFournisseur
     *
     * @return Fournisseur
     */
    public function setReferenceFournisseur($referenceFournisseur)
    {
        $this->referenceFournisseur = $referenceFournisseur;

        return $this;
    }

    /**
     * Get referenceFournisseur
     *
     * @return string
     */
    public function getReferenceFournisseur()
    {
        return $this->referenceFournisseur;
    }

    /**
     * Set numeroFournisseur
     *
     * @param integer $numeroFournisseur
     *
     * @return Fournisseur
     */
    public function setNumeroFournisseur($numeroFournisseur)
    {
        $this->numeroFournisseur = $numeroFournisseur;

        return $this;
    }

     /**
     * Set etatFournisseur
     *
     * @param integer $etatFournisseur
     *
     * @return Fournisseur
     */
    public function setEtatFournisseur($etatFournisseur)
    {
        $this->etatFournisseur = $etatFournisseur;

        return $this;
    }

    /**
     * Get etatFournisseur
     *
     * @return int
     */
    public function getEtatFournisseur()
    {
        return $this->etatFournisseur;
    }
    /**
     * Get numeroFournisseur
     *
     * @return int
     */
    public function getNumeroFournisseur()
    {
        return $this->numeroFournisseur;
    }

    /**
     * Set adresseFournisseur
     *
     * @param string $adresseFournisseur
     *
     * @return Fournisseur
     */
    public function setAdresseFournisseur($adresseFournisseur)
    {
        $this->adresseFournisseur = $adresseFournisseur;

        return $this;
    }

    /**
     * Get adresseFournisseur
     *
     * @return string
     */
    public function getAdresseFournisseur()
    {
        return $this->adresseFournisseur;
    }

    /**
     * Set emailFournisseur
     *
     * @param string $emailFournisseur
     *
     * @return Fournisseur
     */
    public function setEmailFournisseur($emailFournisseur)
    {
        $this->emailFournisseur = $emailFournisseur;

        return $this;
    }

    /**
     * Get emailFournisseur
     *
     * @return string
     */
    public function getEmailFournisseur()
    {
        return $this->emailFournisseur;
    }


    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->nomFournisseur;
    }
}

