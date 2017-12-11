<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheTech
 *
 * @ORM\Table(name="fiche_tech")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheTechRepository")
 */
class FicheTech
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
     * @ORM\Column(name="plateau", type="string", length=255, nullable=true)
     */
    private $plateau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="durée", type="datetime", nullable=true)
     */
    private $duration;

    /**
     * @var bool
     *
     * @ORM\Column(name="noir", type="boolean", nullable=true)
     */
    private $noir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="installDuration", type="time", nullable=true)
     */
    private $installDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="information", type="text", nullable=true)
     */
    private $information;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;


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
     * Set plateau
     *
     * @param string $plateau
     *
     * @return FicheTech
     */
    public function setPlateau($plateau)
    {
        $this->plateau = $plateau;

        return $this;
    }

    /**
     * Get plateau
     *
     * @return string
     */
    public function getPlateau()
    {
        return $this->plateau;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return FicheTech
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set noir
     *
     * @param boolean $noir
     *
     * @return FicheTech
     */
    public function setNoir($noir)
    {
        $this->noir = $noir;

        return $this;
    }

    /**
     * Get noir
     *
     * @return bool
     */
    public function getNoir()
    {
        return $this->noir;
    }

    /**
     * Set installDuration
     *
     * @param \DateTime $installDuration
     *
     * @return FicheTech
     */
    public function setInstallDuration($installDuration)
    {
        $this->installDuration = $installDuration;

        return $this;
    }

    /**
     * Get installDuration
     *
     * @return \DateTime
     */
    public function getInstallDuration()
    {
        return $this->installDuration;
    }

    /**
     * Set information
     *
     * @param string $information
     *
     * @return FicheTech
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return FicheTech
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
}

