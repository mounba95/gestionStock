<?php

namespace Novatech\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fature
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="Novatech\StockBundle\Repository\FatureRepository")
 */
class Facture
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
     * @ORM\Column(name="referenceFacture", type="string", length=255)
     */
    private $referenceFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="offre", type="string", length=255, nullable=true)
     */
    private $offre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOperationFacture", type="datetime")
     */
    private $dateOperationFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFacture", type="datetime")
     */
    private $dateFacture;

    /**
     * @var int
     *
     * @ORM\Column(name="remise", type="integer", nullable=true)
     */
    private $remise;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", nullable=true)
     */
    private $statut;


    /**
     * @ORM\OneToMany(targetEntity="Achat", mappedBy="facture")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=true)
     */
    private $achat;

     /**
     * @ORM\ManyToOne(targetEntity="\Novatech\ClientBundle\Entity\Client", inversedBy ="facture")
     * @ORM\JoinColumn(nullable=true,name = "client_id",referencedColumnName ="id")
     */
    private $client;

     /**
     * @ORM\ManyToOne(targetEntity="Tva", inversedBy ="facture")
     * @ORM\JoinColumn(nullable=true,name = "tva_id",referencedColumnName ="id")
     */
    private $tva;

     /**
     * @ORM\ManyToOne(targetEntity="userManagerBundle\Entity\User", inversedBy ="facture")
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
     * Set referenceFacture
     *
     * @param string $referenceFacture
     *
     * @return Fature
     */
    public function setReferenceFacture($referenceFacture)
    {
        $this->referenceFacture = $referenceFacture;

        return $this;
    }

    /**
     * Get referenceFacture
     *
     * @return string
     */
    public function getReferenceFacture()
    {
        return $this->referenceFacture;
    }

    /**
     * Set offre
     *
     * @param string $offre
     *
     * @return Fature
     */
    public function setOffre($offre)
    {
        $this->offre = $offre;

        return $this;
    }

    /**
     * Get offre
     *
     * @return string
     */
    public function getOffre()
    {
        return $this->offre;
    }


    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     *
     * @return Facture
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set dateOperationFacture
     *
     * @param \DateTime $dateOperationFacture
     *
     * @return Facture
     */
    public function setDateOperationFacture($dateOperationFacture)
    {
        $this->dateOperationFacture = $dateOperationFacture;

        return $this;
    }

    /**
     * Get dateOperationFacture
     *
     * @return \DateTime
     */
    public function getDateOperationFacture()
    {
        return $this->dateOperationFacture;
    }



    /**
     * Set client
     *
     * @param \Novatech\ClientBundle\Entity\Client $client
     *
     * @return Facture
     */
    public function setClient(\Novatech\ClientBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Novatech\ClientBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }


    /**
     * Set tva
     *
     * @param Tva $tva
     *
     * @return Facture
     */
    public function setTva(Tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return Tva
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set remise
     *
     * @param integer $remise
     *
     * @return Facture
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return int
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return Facture
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }

      /**
     * Set user
     *
     * @param \userManagerBundle\Entity\User $user
     *
     * @return Facture
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

