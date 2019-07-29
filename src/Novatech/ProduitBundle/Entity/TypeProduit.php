<?php

namespace Novatech\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeProduit
 *
 * @ORM\Table(name="type_produit")
 * @ORM\Entity(repositoryClass="Novatech\ProduitBundle\Repository\TypeProduitRepository")
 */
class TypeProduit
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
     * @ORM\Column(name="nomType", type="string", length=255)
     */
    private $nomType;

    /**
     * @var string
     *
     * @ORM\Column(nullable= true, name="descriptionType", type="string", length=255)
     */
    private $descriptionType;

    /**
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="typeproduit")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $produit;

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
     * Set nomType
     *
     * @param string $nomType
     *
     * @return TypeProduit
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;

        return $this;
    }

    /**
     * Get nomType
     *
     * @return string
     */
    public function getNomType()
    {
        return $this->nomType;
    }

    /**
     * Set descriptionType
     *
     * @param string $descriptionType
     *
     * @return TypeProduit
     */
    public function setDescriptionType($descriptionType)
    {
        $this->descriptionType = $descriptionType;

        return $this;
    }

    /**
     * Get descriptionType
     *
     * @return string
     */
    public function getDescriptionType()
    {
        return $this->descriptionType;
    }

    /**
     * generates a string
     *
     * @return string
     */
    public function __toString()
    {
     return $this->nomType; 
    }
}

