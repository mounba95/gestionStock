<?php

namespace Novatech\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="Novatech\StockBundle\Repository\StockRepository")
 */
class Stock
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
     * @ORM\Column(name="quantiteProduit", type="integer")
     */
    private $quantiteProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="limiteProduit", type="integer")
     */
    private $limiteProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="prixProduit", type="integer", nullable= true)
     */
    private $prixProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePermptionProduit", type="datetime", nullable =true)
     */
    private $datePermptionProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOperation", type="datetime")
     */
    private $dateOperation;

    /**
     * @ORM\ManyToOne(targetEntity="Novatech\ProduitBundle\Entity\Produit", inversedBy ="stock")
     * @ORM\JoinColumn(nullable=true,name = "produit_id",referencedColumnName ="id")
     */
    private $produit;

     /**
     * @ORM\ManyToOne(targetEntity="userManagerBundle\Entity\User", inversedBy ="stock")
     * @ORM\JoinColumn(nullable=true,name = "user_id",referencedColumnName ="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="StockFournisseur", mappedBy="stock")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $stockFournisseur;

    /**
     * @ORM\OneToMany(targetEntity="Achat", mappedBy="stock")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $achat;

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
     * Set quantiteProduit
     *
     * @param integer $quantiteProduit
     *
     * @return Stock
     */
    public function setQuantiteProduit($quantiteProduit)
    {
        $this->quantiteProduit = $quantiteProduit;

        return $this;
    }

    /**
     * Get quantiteProduit
     *
     * @return int
     */
    public function getQuantiteProduit()
    {
        return $this->quantiteProduit;
    }

/**
     * Set limiteProduit
     *
     * @param integer $limiteProduit
     *
     * @return Stock
     */
    public function setLimiteProduit($limiteProduit)
    {
        $this->limiteProduit = $limiteProduit;

        return $this;
    }

    /**
     * Get limiteProduit
     *
     * @return int
     */
    public function getLimiteProduit()
    {
        return $this->limiteProduit;
    }
    
    /**
     * Set prixProduit
     *
     * @param integer $prixProduit
     *
     * @return Stock
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    /**
     * Get prixProduit
     *
     * @return int
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * Set datePermptionProduit
     *
     * @param \DateTime $datePermptionProduit
     *
     * @return Stock
     */
    public function setDatePermptionProduit($datePermptionProduit)
    {
        $this->datePermptionProduit = $datePermptionProduit;

        return $this;
    }

    /**
     * Get datePermptionProduit
     *
     * @return \DateTime
     */
    public function getDatePermptionProduit()
    {
        return $this->datePermptionProduit;
    }

    /**
     * Set dateOperation
     *
     * @param \DateTime $dateOperation
     *
     * @return Stock
     */
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;

        return $this;
    }

    /**
     * Get dateOperation
     *
     * @return \DateTime
     */
    public function getDateOperation()
    {
        return $this->dateOperation;
    }
    
     /**
     * Set produit
     *
     * @param \Novatech\ProduitBundle\Entity\Produit $produit
     *
     * @return Stock
     */
    public function setProduit(\Novatech\ProduitBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Novatech\ProduitBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

      /**
     * Set user
     *
     * @param \userManagerBundle\Entity\User $user
     *
     * @return Stock
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

    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
     return $this->getProduit()->getNomProduit().' (Type :'.$this->getProduit()->getTypeProduit()->getNomType().')'.' (Quantité en stock:'.$this->getQuantiteProduit().')'; 
    }
}

