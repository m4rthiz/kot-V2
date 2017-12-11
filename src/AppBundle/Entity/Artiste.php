<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="artiste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtisteRepository")
 */
class Artiste
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var array
     *
     * @ORM\Column(name="instruments", type="array")
     */
    private $instruments;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="partoCirculaire", type="string", length=255, nullable=true)
     */
    private $partoCirculaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Artiste
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Artiste
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set instruments
     *
     * @param array $instruments
     *
     * @return Artiste
     */
    public function setInstruments($instruments)
    {
        $this->instruments = $instruments;

        return $this;
    }

    /**
     * Get instruments
     *
     * @return array
     */
    public function getInstruments()
    {
        return $this->instruments;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Artiste
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set partoCirculaire
     *
     * @param string $partoCirculaire
     *
     * @return Artiste
     */
    public function setPartoCirculaire($partoCirculaire)
    {
        $this->partoCirculaire = $partoCirculaire;

        return $this;
    }

    /**
     * Get partoCirculaire
     *
     * @return string
     */
    public function getPartoCirculaire()
    {
        return $this->partoCirculaire;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Artiste
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
}

