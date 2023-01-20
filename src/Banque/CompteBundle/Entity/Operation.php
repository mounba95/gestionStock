<?php

namespace Banque\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table(name="operation")
 * @ORM\Entity(repositoryClass="Banque\CompteBundle\Repository\OperationRepository")
 */
class Operation
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
     * @ORM\Column(name="montantOperation", type="integer")
     */
    private $montantOperation;

    /**
     * @var int
     *
     * @ORM\Column(name="etatOperation", type="integer")
     */
    private $etatOperation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOperation", type="datetime")
     */
    private $dateOperation;

 /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOp", type="datetime")
     */
    private $dateOp;

    /**
     * @var int
     *
     * @ORM\Column(name="typeOperation", type="integer")
     */
    private $typeOperation;

    /**
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy ="operation")
     * @ORM\JoinColumn(nullable=true,name = "compte_id",referencedColumnName ="id")
     */
    private $compte;

    /**
     * @ORM\ManyToOne(targetEntity="userManagerBundle\Entity\User", inversedBy ="operation")
     * @ORM\JoinColumn(nullable=true,name = "user_id",referencedColumnName ="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionOperation", type="text", nullable=true)
     */
    private $descriptionOperation;

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
     * Set montantOperation
     *
     * @param integer $montantOperation
     *
     * @return Operation
     */
    public function setMontantOperation($montantOperation)
    {
        $this->montantOperation = $montantOperation;

        return $this;
    }

    /**
     * Get montantOperation
     *
     * @return int
     */
    public function getMontantOperation()
    {
        return $this->montantOperation;
    }

    /**
     * Set etatOperation
     *
     * @param integer $etatOperation
     *
     * @return Operation
     */
    public function setEtatOperation($etatOperation)
    {
        $this->etatOperation = $etatOperation;

        return $this;
    }

    /**
     * Get etatOperation
     *
     * @return int
     */
    public function getEtatOperation()
    {
        return $this->etatOperation;
    }

    /**
     * Set dateOperation
     *
     * @param \DateTime $dateOperation
     *
     * @return Operation
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
     * Set dateOp
     *
     * @param \DateTime $dateOp
     *
     * @return Operation
     */
    public function setDateOp($dateOp)
    {
        $this->dateOp = $dateOp;

        return $this;
    }

    /**
     * Get dateOp
     *
     * @return \DateTime
     */
    public function getDateOp()
    {
        return $this->dateOp;
    }


    /**
     * Set typeOperation
     *
     * @param integer $typeOperation
     *
     * @return Operation
     */
    public function setTypeOperation($typeOperation)
    {
        $this->typeOperation = $typeOperation;

        return $this;
    }

    /**
     * Get typeOperation
     *
     * @return int
     */
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * Set compte
     *
     * @param Compte $compte
     *
     * @return Operation
     */
    public function setCompte(Compte $compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set user
     *
     * @param \userManagerBundle\Entity\User $user
     *
     * @return Operation
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
     * Set descriptionOperation
     *
     * @param string $descriptionOperation
     *
     * @return Operation
     */
    public function setDescriptionOperation($descriptionOperation)
    {
        $this->descriptionOperation = $descriptionOperation;

        return $this;
    }

    /**
     * Get descriptionOperation
     *
     * @return string
     */
    public function getDescriptionOperation()
    {
        return $this->descriptionOperation;
    }

}

