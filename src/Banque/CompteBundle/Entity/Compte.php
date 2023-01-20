<?php

namespace Banque\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity(repositoryClass="Banque\CompteBundle\Repository\CompteRepository")
 */
class Compte
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
     * @ORM\Column(name="numerCompte", type="integer")
     */
    private $numerCompte;

    /**
     * @var int
     *
     * @ORM\Column(name="soldeCompte", type="integer")
     */
    private $soldeCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCompte", type="string", length=255, nullable=true)
     */
    private $nomCompte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCompte", type="datetime")
     */
    private $dateCompte;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatCompte", type="boolean")
     */
    private $etatCompte;


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
     * Set numerCompte
     *
     * @param integer $numerCompte
     *
     * @return Compte
     */
    public function setNumerCompte($numerCompte)
    {
        $this->numerCompte = $numerCompte;

        return $this;
    }

    /**
     * Get numerCompte
     *
     * @return int
     */
    public function getNumerCompte()
    {
        return $this->numerCompte;
    }

    /**
     * Set soldeCompte
     *
     * @param integer $soldeCompte
     *
     * @return Compte
     */
    public function setSoldeCompte($soldeCompte)
    {
        $this->soldeCompte = $soldeCompte;

        return $this;
    }

    /**
     * Get soldeCompte
     *
     * @return int
     */
    public function getSoldeCompte()
    {
        return $this->soldeCompte;
    }

    /**
     * Set nomCompte
     *
     * @param string $nomCompte
     *
     * @return Compte
     */
    public function setNomCompte($nomCompte)
    {
        $this->nomCompte = $nomCompte;

        return $this;
    }

    /**
     * Get nomCompte
     *
     * @return string
     */
    public function getNomCompte()
    {
        return $this->nomCompte;
    }

    /**
     * Set dateCompte
     *
     * @param \DateTime $dateCompte
     *
     * @return Compte
     */
    public function setDateCompte($dateCompte)
    {
        $this->dateCompte = $dateCompte;

        return $this;
    }

    /**
     * Get dateCompte
     *
     * @return \DateTime
     */
    public function getDateCompte()
    {
        return $this->dateCompte;
    }

    /**
     * Set etatCompte
     *
     * @param boolean $etatCompte
     *
     * @return Compte
     */
    public function setEtatCompte($etatCompte)
    {
        $this->etatCompte = $etatCompte;

        return $this;
    }

    /**
     * Get etatCompte
     *
     * @return bool
     */
    public function getEtatCompte()
    {
        return $this->etatCompte;
    }

    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->nomCompte;
    }
}

