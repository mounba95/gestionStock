<?php

namespace Novatech\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Novatech\ClientBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="nomClient", type="string", length=255)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="referenceClient", type="string", length=255)
     */
    private $referenceClient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseClient", type="string", length=255)
     */
    private $adresseClient;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroClient", type="integer")
     */
    private $numeroClient;

    
    /**
     * @var int
     *
     * @ORM\Column(name="etatClient", type="integer")
     */
    private $etatClient;


    /**
     * @var string
     *
     * @ORM\Column(name="emailClient", type="string", length=255, nullable=true)
     */
    private $emailClient;

    /**
     * @ORM\OneToMany(targetEntity="\Novatech\StockBundle\Entity\Facture", mappedBy="client")
     * @ORM\JoinColumn(nullable=false)
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
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set referenceClient
     *
     * @param string $referenceClient
     *
     * @return Client
     */
    public function setReferenceClient($referenceClient)
    {
        $this->referenceClient = $referenceClient;

        return $this;
    }

    /**
     * Get referenceClient
     *
     * @return string
     */
    public function getReferenceClient()
    {
        return $this->referenceClient;
    }

    /**
     * Set adresseClient
     *
     * @param string $adresseClient
     *
     * @return Client
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    /**
     * Get adresseClient
     *
     * @return string
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Set numeroClient
     *
     * @param integer $numeroClient
     *
     * @return Client
     */
    public function setNumeroClient($numeroClient)
    {
        $this->numeroClient = $numeroClient;

        return $this;
    }

    /**
     * Get numeroClient
     *
     * @return int
     */
    public function getNumeroClient()
    {
        return $this->numeroClient;
    }

  /**
     * Set etatClient
     *
     * @param integer $etatClient
     *
     * @return Client
     */
    public function setEtatClient($etatClient)
    {
        $this->etatClient = $etatClient;

        return $this;
    }

    /**
     * Get etatClient
     *
     * @return int
     */
    public function getEtatClient()
    {
        return $this->etatClient;
    }

    /**
     * Set emailClient
     *
     * @param string $emailClient
     *
     * @return Client
     */
    public function setEmailClient($emailClient)
    {
        $this->emailClient = $emailClient;

        return $this;
    }

    /**
     * Get emailClient
     *
     * @return string
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }


    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
     return $this->referenceClient; 
    }
}

