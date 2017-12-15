<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Artiste", mappedBy="spectacles")
     */
    private $distribution;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\FicheTech")
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
    private $videos;

    /**
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Partner", mappedBy="spectacles")
     */
    private $partners;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Agenda", inversedBy="spectacle")
     */
    private $date;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->distribution = new ArrayCollection();
        $this->partners = new ArrayCollection();
    }

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
     * Set videos
     *
     * @param array $videos
     *
     * @return Spectacle
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;

        return $this;
    }

    /**
     * Get videos
     *
     * @return array
     */
    public function getVideos()
    {
        return $this->videos;
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
     */
    public function getPartners()
    {
        return $this->partners;
    }




    /**
     * Add distribution
     *
     * @param \AppBundle\Entity\Artiste $distribution
     *
     * @return Spectacle
     */
    public function addDistribution(Artiste $distribution)
    {
        $this->distribution[] = $distribution;

        return $this;
    }

    /**
     * Remove distribution
     *
     * @param \AppBundle\Entity\Artiste $distribution
     */
    public function removeDistribution(Artiste $distribution)
    {
        $this->distribution->removeElement($distribution);
    }

    /**
     * Add partner
     *
     * @param \AppBundle\Entity\Partner $partner
     *
     * @return Spectacle
     */
    public function addPartner(Partner $partner)
    {
        $this->partners[] = $partner;

        return $this;
    }

    /**
     * Remove partner
     *
     * @param \AppBundle\Entity\Partner $partner
     */
    public function removePartner(Partner $partner)
    {
        $this->partners->removeElement($partner);
    }
}
