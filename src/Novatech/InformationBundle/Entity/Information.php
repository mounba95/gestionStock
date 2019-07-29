<?php

namespace Novatech\InformationBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 *
 * @ORM\Table(name="information")
 * @ORM\Entity(repositoryClass="Novatech\InformationBundle\Repository\InformationRepository")
 */
class Information
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
     * @ORM\Column(name="NomInformation", type="string", length=255)
     */
    private $nomInformation;

    /**
     * @var string
     *
     * @ORM\Column(name="dg", type="string", length=255, nullable=true)
     */
    private $dg;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

     /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="situationJuridique", type="string", length=255, nullable=true)
     */
    private $situationJuridique;


    /**
     * @var string
     *
     * @ORM\Column(name="slogant", type="string", length=255, nullable=true)
     */
    private $slogant;


    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=255, nullable=true)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var int
     *
     * @ORM\Column(name="cel", type="integer", nullable=true)
     */
    private $cel;

    /**
     * @var string
     *
     * @ORM\Column(name="compteBancaire", type="string", length=255, nullable=true)
     */
    private $compteBancaire;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=255, nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */

    public $file;

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
     * Set dg
     *
     * @param string $dg
     *
     * @return Information
     */
    public function setDg($dg)
    {
        $this->dg = $dg;

        return $this;
    }

    /**
     * Get dg
     *
     * @return string
     */
    public function getDg()
    {
        return $this->dg;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Information
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     *
     * @return Information
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Information
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set cel
     *
     * @param integer $cel
     *
     * @return Information
     */
    public function setCel($cel)
    {
        $this->cel = $cel;

        return $this;
    }

    /**
     * Get cel
     *
     * @return int
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * Set nomInformation
     *
     * @param string $nomInformation
     *
     * @return Information
     */
    public function setNomInformation($nomInformation)
    {
        $this->nomInformation = $nomInformation;

        return $this;
    }

    /**
     * Get nomInformation
     *
     * @return string
     */
    public function getNomInformation()
    {
        return $this->nomInformation;
    }

    /**
     * Set compteBancaire
     *
     * @param string $compteBancaire
     *
     * @return Information
     */
    public function setCompteBancaire($compteBancaire)
    {
        $this->compteBancaire = $compteBancaire;

        return $this;
    }

    /**
     * Get compteBancaire
     *
     * @return string
     */
    public function getCompteBancaire()
    {
        return $this->compteBancaire;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Information
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set slogant
     *
     * @param string $slogant
     *
     * @return Information
     */
    public function setSlogant($slogant)
    {
        $this->slogant = $slogant;

        return $this;
    }

    /**
     * Get slogant
     *
     * @return string
     */
    public function getSlogant()
    {
        return $this->slogant;
    }

    /**
     * Set situationJuridique
     *
     * @param string $situationJuridique
     *
     * @return Information
     */
    public function setSituationJuridique($situationJuridique)
    {
        $this->situationJuridique = $situationJuridique;

        return $this;
    }

    /**
     * Get situationJuridique
     *
     * @return string
     */
    public function getSituationJuridique()
    {
        return $this->situationJuridique;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Information
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

     /**
     * Set message
     *
     * @param string $message
     *
     * @return Information
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Information
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }



    //partie uploads image

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/logos';
    }


    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }


}

