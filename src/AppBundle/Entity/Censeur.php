<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Censeur
 *
 * @ORM\Table(name="censeur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CenseurRepository")
 */
class Censeur extends User
{
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Ecole",cascade={"persist"})
     *
     */
    private $ecole;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Compte",cascade={"persist"})
     *
     */
    private $compte;




    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob")
     */
    private $photo;


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
     * Set photo
     *
     * @param string $photo
     *
     * @return Censeur
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
}

