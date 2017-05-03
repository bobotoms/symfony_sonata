<?php
# Fichier Genre.php

namespace VideothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Genre
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Film", mappedBy="listeDesGenres")
     */
    protected $listeDesFilms;

    /**
     * @ORM\Column(type="string", length=90)
     */
    protected $label;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesFilms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Genre
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add listeDesFilms
     *
     * @param \VideothequeBundle\Entity\Film $listeDesFilms
     * @return Genre
     */
    public function addListeDesFilm(\VideothequeBundle\Entity\Film $listeDesFilms)
    {
        $this->listeDesFilms[] = $listeDesFilms;

        return $this;
    }

    /**
     * Remove listeDesFilms
     *
     * @param \VideothequeBundle\Entity\Film $listeDesFilms
     */
    public function removeListeDesFilm(\VideothequeBundle\Entity\Film $listeDesFilms)
    {
        $this->listeDesFilms->removeElement($listeDesFilms);
    }

    /**
     * Get listeDesFilms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesFilms()
    {
        return $this->listeDesFilms;
    }
}
