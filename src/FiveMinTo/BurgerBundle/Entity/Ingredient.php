<?php

namespace FiveMinTo\BurgerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Ingredient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FiveMinTo\BurgerBundle\Entity\IngredientRepository")
 * @UniqueEntity("nomIngredientSingulier")
 * @UniqueEntity("nomIngredientPluriel")
 * @UniqueEntity("id")
 */
class Ingredient
{
    /**
     * @ORM\OneToMany(targetEntity="FiveMinTo\BurgerBundle\Entity\BurgerIngredient", mappedBy="ingredient")
     */
    private $ingredient;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomIngredientSingulier", type="string", length=255)
     */
    private $nomIngredientSingulier;

    /**
     * @var string
     *
     * @ORM\Column(name="nomIngredientPluriel", type="string", length=255)
     */
    private $nomIngredientPluriel;


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
     * Set nomIngredientSingulier
     *
     * @param string $nomIngredientSingulier
     * @return Ingredient
     */
    public function setNomIngredientSingulier($nomIngredientSingulier)
    {
        $this->nomIngredientSingulier = $nomIngredientSingulier;
    
        return $this;
    }

    /**
     * Get nomIngredientSingulier
     *
     * @return string 
     */
    public function getNomIngredientSingulier()
    {
        return $this->nomIngredientSingulier;
    }

    /**
     * Set nomIngredientPluriel
     *
     * @param string $nomIngredientPluriel
     * @return Ingredient
     */
    public function setNomIngredientPluriel($nomIngredientPluriel)
    {
        $this->nomIngredientPluriel = $nomIngredientPluriel;
    
        return $this;
    }

    /**
     * Get nomIngredientPluriel
     *
     * @return string 
     */
    public function getNomIngredientPluriel()
    {
        return $this->nomIngredientPluriel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredient = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add ingredient
     *
     * @param \FiveMinTo\BurgerBundle\Entity\BurgerIngredient $ingredient
     * @return Ingredient
     */
    public function addIngredient(\FiveMinTo\BurgerBundle\Entity\BurgerIngredient $ingredient)
    {
        $this->ingredient[] = $ingredient;
    
        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \FiveMinTo\BurgerBundle\Entity\BurgerIngredient $ingredient
     */
    public function removeIngredient(\FiveMinTo\BurgerBundle\Entity\BurgerIngredient $ingredient)
    {
        $this->ingredient->removeElement($ingredient);
    }

    /**
     * Get ingredient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}