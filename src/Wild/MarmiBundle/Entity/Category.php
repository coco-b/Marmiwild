<?php

namespace Wild\MarmiBundle\Entity;

/**
 * Category
 */
class category
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $entree;

    /**
     * @var string
     */
    private $plat;

    /**
     * @var string
     */
    private $dessert;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $recettes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recettes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set entree
     *
     * @param string $entree
     *
     * @return category
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return string
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * Set plat
     *
     * @param string $plat
     *
     * @return category
     */
    public function setPlat($plat)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return string
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * Set dessert
     *
     * @param string $dessert
     *
     * @return category
     */
    public function setDessert($dessert)
    {
        $this->dessert = $dessert;

        return $this;
    }

    /**
     * Get dessert
     *
     * @return string
     */
    public function getDessert()
    {
        return $this->dessert;
    }

    /**
     * Add recette
     *
     * @param \Wild\MarmiBundle\Entity\recette $recette
     *
     * @return category
     */
    public function addRecette(\Wild\MarmiBundle\Entity\recette $recette)
    {
        $this->recettes[] = $recette;

        return $this;
    }

    /**
     * Remove recette
     *
     * @param \Wild\MarmiBundle\Entity\recette $recette
     */
    public function removeRecette(\Wild\MarmiBundle\Entity\recette $recette)
    {
        $this->recettes->removeElement($recette);
    }

    /**
     * Get recettes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecettes()
    {
        return $this->recettes;
    }
}
