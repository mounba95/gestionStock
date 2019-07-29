<?php

namespace Novatech\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="Novatech\ProduitBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="nomProduit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="referenceProduit", type="string", length=255)
     */
    private $referenceProduit;

    /**
     * @var string
     *
     * @ORM\Column(nullable= true, name="descriptionProduit", type="string", length=255)
     */
    private $descriptionProduit;

   /**
     * @ORM\ManyToOne(targetEntity="TypeProduit", inversedBy ="produit")
     * @ORM\JoinColumn(nullable=true,name = "typeproduit_id",referencedColumnName ="id")
     */
    private $typeProduit;

     /**
     * @ORM\OneToMany(targetEntity="Novatech\StockBundle\Entity\Stock", mappedBy="produit")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $stock;

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
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set referenceProduit
     *
     * @param string $referenceProduit
     *
     * @return Produit
     */
    public function setReferenceProduit($referenceProduit)
    {
        $this->referenceProduit = $referenceProduit;

        return $this;
    }

    /**
     * Get referenceProduit
     *
     * @return string
     */
    public function getReferenceProduit()
    {
        return $this->referenceProduit;
    }

    /**
     * Set descriptionProduit
     *
     * @param string $descriptionProduit
     *
     * @return Produit
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    /**
     * Get descriptionProduit
     *
     * @return string
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }
    
    /**
     * Set typeProduit
     *
     * @param string $typeProduit
     *
     * @return TypeProduit
     */
    public function setTypeProduit($typeProduit)
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return string
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }
    
    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
     return $this->nomProduit; 
    }
}

