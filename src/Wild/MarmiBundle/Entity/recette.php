<?php

namespace Wild\MarmiBundle\Entity;

/**
 * recette
 */
class recette
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $ingredient;


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
     * @return recette
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
     * Set description
     *
     * @param string $description
     *
     * @return recette
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
     * Set ingredient
     *
     * @param string $ingredient
     *
     * @return recette
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return string
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
    /**
     * @var \Wild\MarmiBundle\Entity\category
     */
    private $categories;


    /**
     * Set categories
     *
     * @param \Wild\MarmiBundle\Entity\category $categories
     *
     * @return recette
     */
    public function setCategories(\Wild\MarmiBundle\Entity\category $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \Wild\MarmiBundle\Entity\category
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * @var \Wild\MarmiBundle\Entity\Picture
     */
    private $picture;


    /**
     * Set picture
     *
     * @param \Wild\MarmiBundle\Entity\Picture $picture
     *
     * @return recette
     */
    public function setPicture(\Wild\MarmiBundle\Entity\Picture $picture = null)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \Wild\MarmiBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
