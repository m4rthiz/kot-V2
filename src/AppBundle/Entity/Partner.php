<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Partner
 *
 * @ORM\Table(name="partner")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartnerRepository")
 */
class Partner
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Spectacle", inversedBy="partners")
     */
    private $spectacles;


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
     * Set name
     *
     * @param string $name
     *
     * @return Partner
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Partner
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Partner
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set spectacles
     *
     * @param array $spectacles
     *
     * @return Partner
     */
    public function setSpectacles($spectacles)
    {
        $this->spectacles = $spectacles;

        return $this;
    }

    /**
     * Get spectacles
     *
     */
    public function getSpectacles()
    {
        return $this->spectacles;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spectacles = new ArrayCollection();
    }

    /**
     * Add spectacle
     *
     * @param \AppBundle\Entity\Spectacle $spectacle
     *
     * @return Partner
     */
    public function addSpectacle(Spectacle $spectacle)
    {
        $this->spectacles[] = $spectacle;

        return $this;
    }

    /**
     * Remove spectacle
     *
     * @param \AppBundle\Entity\Spectacle $spectacle
     */
    public function removeSpectacle(Spectacle $spectacle)
    {
        $this->spectacles->removeElement($spectacle);
    }
}
