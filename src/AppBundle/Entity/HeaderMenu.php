<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * HeaderMenu
 *
 * @ORM\Table(name="HeaderMenu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HeaderMenuRepository")
 */
class HeaderMenu
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
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="menu", type="string", length=255)
     */
    private $menu;

    /**
     * @var string
     *
     * @ORM\Column(name="bouton", type="string", length=255)
     */
    private $bouton;

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
     * Set name
     *
     * @param string $name
     * @return HeaderMenu
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

    public function __construct()
    {
        $this->blogPosts = new ArrayCollection();
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
     * Set logo
     *
     * @param string $logo
     * @return HeaderMenu
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

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
     * Set tel
     *
     * @param string $tel
     * @return HeaderMenu
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get menu
     *
     * @return string 
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set menu
     *
     * @param string $menu
     * @return HeaderMenu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get bouton
     *
     * @return string 
     */
    public function getBouton()
    {
        return $this->bouton;
    }

    /**
     * Set bouton
     *
     * @param string $bouton
     * @return HeaderMenu
     */
    public function setBouton($bouton)
    {
        $this->bouton = $bouton;

        return $this;
    }
}
