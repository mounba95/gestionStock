<?php

namespace Novatech\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockFournisseur
 *
 * @ORM\Table(name="stock_fournisseur")
 * @ORM\Entity(repositoryClass="Novatech\StockBundle\Repository\StockFournisseurRepository")
 */
class StockFournisseur
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
     * @ORM\Column(name="quantiteProduitFournisseur", type="integer")
     */
    private $quantiteProduitFournisseur;

    /**
     * @ORM\ManyToOne(targetEntity="Novatech\ClientBundle\Entity\Fournisseur", inversedBy ="stockFournisseur")
     * @ORM\JoinColumn(nullable=true,name = "fournisseur_id",referencedColumnName ="id")
     */
    private $fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity="Novatech\StockBundle\Entity\Stock", inversedBy ="stockFournisseur")
     * @ORM\JoinColumn(nullable=true,name = "stock_id",referencedColumnName ="id")
     */
    private $stock;

    /**
     * @var int
     *
     * @ORM\Column(name="prixProduitFournisseur", type="integer")
     */
    private $prixProduitFournisseur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateApprovisioner", type="datetime")
     */
    private $dateApprovisioner;

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
     * Set stock
     *
     * @param Stock $stock
     *
     * @return StockFournisseur
     */
    public function setStock(Stock $stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return Stock
     */
    public function getStock()
    {
        return $this->stock;
    }


    /**
     * Set fournisseur
     *
     * @param \Novatech\ClientBundle\Entity\Fournisseur $fournisseur
     *
     * @return StockFournisseur
     */
    public function setFournisseur(\Novatech\ClientBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \Novatech\ClientBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Set quantiteProduitFournisseur
     *
     * @param integer $quantiteProduitFournisseur
     *
     * @return StockFournisseur
     */
    public function setQuantiteProduitFournisseur($quantiteProduitFournisseur)
    {
        $this->quantiteProduitFournisseur = $quantiteProduitFournisseur;

        return $this;
    }

    /**
     * Get quantiteProduitFournisseur
     *
     * @return int
     */
    public function getQuantiteProduitFournisseur()
    {
        return $this->quantiteProduitFournisseur;
    }

    /**
     * Set prixProduitFournisseur
     *
     * @param integer $prixProduitFournisseur
     *
     * @return StockFournisseur
     */
    public function setPrixProduitFournisseur($prixProduitFournisseur)
    {
        $this->prixProduitFournisseur = $prixProduitFournisseur;

        return $this;
    }

    /**
     * Set dateApprovisioner
     *
     * @param \DateTime $dateApprovisioner
     *
     * @return StockFournisseur
     */
    public function setDateApprovisioner($dateApprovisioner)
    {
        $this->dateApprovisioner = $dateApprovisioner;

        return $this;
    }

    /**
     * Get dateApprovisioner
     *
     * @return \DateTime
     */
    public function getDateApprovisioner()
    {
        return $this->dateApprovisioner;
    }

    /**
     * Get prixProduitFournisseur
     *
     * @return int
     */
    public function getPrixProduitFournisseur()
    {
        return $this->prixProduitFournisseur;
    }

}

