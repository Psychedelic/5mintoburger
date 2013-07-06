<?php

namespace FiveMinTo\BurgerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="FiveMinTo\BurgerBundle\Entity\BurgerIngredientRepository")
 */
class BurgerIngredient
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
    /**
     * @ORM\ManyToOne(targetEntity="FiveMinTo\BurgerBundle\Entity\Burger")
     * @ORM\JoinColumn(name="burger_id", referencedColumnName="id")
     */
    private $burger;

    /**
     * @ORM\ManyToOne(targetEntity="FiveMinTo\BurgerBundle\Entity\Ingredient")
     * @ORM\JoinColumn(name="ingredient_id", referencedColumnName="id")
     */
    private $ingredient;

    /**
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;


    /**
     * Set quantite
     *
     * @param string $quantite
     * @return BurgerIngredient
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return string 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set burger
     *
     * @param \FiveMinTo\BurgerBundle\Entity\Burger $burger
     * @return BurgerIngredient
     */
    public function setBurger(\FiveMinTo\BurgerBundle\Entity\Burger $burger)
    {
        $this->burger = $burger;
    
        return $this;
    }

    /**
     * Get burger
     *
     * @return \FiveMinTo\BurgerBundle\Entity\Burger 
     */
    public function getBurger()
    {
        return $this->burger;
    }

    /**
     * Set ingredient
     *
     * @param \FiveMinTo\BurgerBundle\Entity\Ingredient $ingredient
     * @return BurgerIngredient
     */
    public function setIngredient(\FiveMinTo\BurgerBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
    
        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \FiveMinTo\BurgerBundle\Entity\Ingredient 
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}