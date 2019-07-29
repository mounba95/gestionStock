<?php

namespace Novatech\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="achat")
 * @ORM\Entity(repositoryClass="Novatech\StockBundle\Repository\AchatRepository")
 */
class Achat
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
     * @ORM\Column(name="quantiteAchat", type="integer")
     */
    private $quantiteAchat;

    /**
     * @var int
     *
     * @ORM\Column(nullable=true, name="prixAchat", type="integer")
     */
    private $prixAchat;

    /**
     * @ORM\ManyToOne(targetEntity="Stock", inversedBy ="achat")
     * @ORM\JoinColumn(nullable=true,name = "stock_id",referencedColumnName ="id")
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity="Facture", inversedBy ="achat")
     * @ORM\JoinColumn(nullable=true,name = "facture_id",referencedColumnName ="id")
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
     * Set quantiteAchat
     *
     * @param integer $quantiteAchat
     *
     * @return Achat
     */
    public function setQuantiteAchat($quantiteAchat)
    {
        $this->quantiteAchat = $quantiteAchat;

        return $this;
    }

    /**
     * Get quantiteAchat
     *
     * @return int
     */
    public function getQuantiteAchat()
    {
        return $this->quantiteAchat;
    }

    /**
     * Set prixAchat
     *
     * @param integer $prixAchat
     *
     * @return Achat
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return int
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set stock
     *
     * @param \Novatech\StockBundle\Entity\Stock $stock
     *
     * @return Achat
     */
    public function setStock(\Novatech\StockBundle\Entity\Stock $stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return \Novatech\StockBundle\Entity\Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set facture
     *
     * @param \Novatech\StockBundle\Entity\Facture $facture
     *
     * @return Achat
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
}

