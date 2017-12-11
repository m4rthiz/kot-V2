<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spectacle
 *
 * @ORM\Table(name="spectacle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpectacleRepository")
 */
class Spectacle
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255)
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="distribution", type="string", length=255)
     */
    private $distribution;

    /**
     * @var string
     *
     * @ORM\Column(name="ficheTech", type="string", length=255, nullable=true)
     */
    private $ficheTech;

    /**
     * @var array
     *
     * @ORM\Column(name="images", type="array", nullable=true)
     */
    private $images;

    /**
     * @var array
     *
     * @ORM\Column(name="vidéos", type="array", nullable=true)
     */
    private $vidéos;

    /**
     * @var array
     *
     * @ORM\Column(name="partners", type="array", nullable=true)
     */
    private $partners;

    /**
     * @var array
     *
     * @ORM\Column(name="files", type="array", nullable=true)
     */
    private $files;


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
     * Set title
     *
     * @param string $title
     *
     * @return Spectacle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return Spectacle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Spectacle
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set distribution
     *
     * @param string $distribution
     *
     * @return Spectacle
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * Get distribution
     *
     * @return string
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * Set ficheTech
     *
     * @param string $ficheTech
     *
     * @return Spectacle
     */
    public function setFicheTech($ficheTech)
    {
        $this->ficheTech = $ficheTech;

        return $this;
    }

    /**
     * Get ficheTech
     *
     * @return string
     */
    public function getFicheTech()
    {
        return $this->ficheTech;
    }

    /**
     * Set images
     *
     * @param array $images
     *
     * @return Spectacle
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set vidéos
     *
     * @param array $vidéos
     *
     * @return Spectacle
     */
    public function setVidéos($vidéos)
    {
        $this->vidéos = $vidéos;

        return $this;
    }

    /**
     * Get vidéos
     *
     * @return array
     */
    public function getVidéos()
    {
        return $this->vidéos;
    }

    /**
     * Set partners
     *
     * @param array $partners
     *
     * @return Spectacle
     */
    public function setPartners($partners)
    {
        $this->partners = $partners;

        return $this;
    }

    /**
     * Get partners
     *
     * @return array
     */
    public function getPartners()
    {
        return $this->partners;
    }

    /**
     * Set files
     *
     * @param array $files
     *
     * @return Spectacle
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files
     *
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }
}

