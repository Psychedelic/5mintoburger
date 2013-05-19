<?php

namespace FiveMinTo\BurgerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Burger
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FiveMinTo\BurgerBundle\Entity\BurgerRepository")
 */
class Burger
{

	function __construct(){
		$this->dateCreationBurger = new \DateTime();
		$vote = new Vote();
	    $vote->setVotePositif(0);	    	
	   	$vote->setVoteNegatif(0);
	   	
	   	$this->setVote($vote);
	}
	
	/**
     * @ORM\OneToMany(targetEntity="FiveMinTo\BurgerBundle\Entity\BurgerIngredient", mappedBy="burger", cascade={"persist"})
     */
    private $burgerIngredient;

	/**
	 * @ORM\OneToOne(targetEntity="FiveMinTo\BurgerBundle\Entity\Vote")
	 * @ORM\JoinColumn(name="vote_id", referencedColumnName="id")
	 */
	 private $vote;
	
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
     * @ORM\Column(name="titreBurger", type="string", length=255)
     */
    private $titreBurger;

    /**
     * @var string
     *
     * @ORM\Column(name="phraseAccrocheBurger", type="string", length=255)
     */
    private $phraseAccrocheBurger;

    /**
     * @var string
     *
     * @ORM\Column(name="phraseFinaleBurger", type="string", length=255)
     */
    private $phraseFinaleBurger;

    /**
     * @var string
     *
     * @ORM\Column(name="urlPhotoBurger", type="string", length=255)
     */
    private $urlPhotoBurger;

    /**
     * @var string
     *
     * @ORM\Column(name="urlVideoBurger", type="string", length=255)
     */
    private $urlVideoBurger;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionBurger", type="text")
     */
    private $descriptionBurger;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationBurger", type="datetime")
     */
    private $dateCreationBurger;

    /**
     * @var string
     *
     * @ORM\Column(name="metaKeywords", type="text", nullable=true)
     */
    private $metaKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="metaDescription", type="text", nullable=true)
     */
    private $metaDescription;
    
    /**
     * @var string
     *
     * @ORM\Column(name="metaTitle", type="text", nullable=true)
     */
    private $metaTitle;


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
     * Set titreBurger
     *
     * @param string $titreBurger
     * @return Burger
     */
    public function setTitreBurger($titreBurger)
    {
        $this->titreBurger = $titreBurger;
    
        return $this;
    }

    /**
     * Get titreBurger
     *
     * @return string 
     */
    public function getTitreBurger()
    {
        return $this->titreBurger;
    }

    /**
     * Set phraseAccrocheBurger
     *
     * @param string $phraseAccrocheBurger
     * @return Burger
     */
    public function setPhraseAccrocheBurger($phraseAccrocheBurger)
    {
        $this->phraseAccrocheBurger = $phraseAccrocheBurger;
    
        return $this;
    }

    /**
     * Get phraseAccrocheBurger
     *
     * @return string 
     */
    public function getPhraseAccrocheBurger()
    {
        return $this->phraseAccrocheBurger;
    }

    /**
     * Set phraseFinaleBurger
     *
     * @param string $phraseFinaleBurger
     * @return Burger
     */
    public function setPhraseFinaleBurger($phraseFinaleBurger)
    {
        $this->phraseFinaleBurger = $phraseFinaleBurger;
    
        return $this;
    }

    /**
     * Get phraseFinaleBurger
     *
     * @return string 
     */
    public function getPhraseFinaleBurger()
    {
        return $this->phraseFinaleBurger;
    }

    /**
     * Set urlPhotoBurger
     *
     * @param string $urlPhotoBurger
     * @return Burger
     */
    public function setUrlPhotoBurger($urlPhotoBurger)
    {
        $this->urlPhotoBurger = $urlPhotoBurger;
    
        return $this;
    }

    /**
     * Get urlPhotoBurger
     *
     * @return string 
     */
    public function getUrlPhotoBurger()
    {
        return $this->urlPhotoBurger;
    }

    /**
     * Set urlVideoBurger
     *
     * @param string $urlVideoBurger
     * @return Burger
     */
    public function setUrlVideoBurger($urlVideoBurger)
    {
        $this->urlVideoBurger = $urlVideoBurger;
    
        return $this;
    }

    /**
     * Get urlVideoBurger
     *
     * @return string 
     */
    public function getUrlVideoBurger()
    {
        return $this->urlVideoBurger;
    }

    /**
     * Set descriptionBurger
     *
     * @param string $descriptionBurger
     * @return Burger
     */
    public function setDescriptionBurger($descriptionBurger)
    {
        $this->descriptionBurger = $descriptionBurger;
    
        return $this;
    }

    /**
     * Get descriptionBurger
     *
     * @return string 
     */
    public function getDescriptionBurger()
    {
        return $this->descriptionBurger;
    }

    /**
     * Set dateCreationBurger
     *
     * @param \DateTime $dateCreationBurger
     * @return Burger
     */
    public function setDateCreationBurger($dateCreationBurger = null)
    {
        $this->dateCreationBurger = $dateCreationBurger;
    
        return $this;
    }

    /**
     * Get dateCreationBurger
     *
     * @return \DateTime 
     */
    public function getDateCreationBurger()
    {
        return $this->dateCreationBurger;
    }

    /**
     * Set metaKeywords
     *
     * @param string $metaKeywords
     * @return Burger
     */
    public function setMetaKeywords($metaKeywords = null)
    {
        $this->metaKeywords = $metaKeywords;
    
        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string 
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return Burger
     */
    public function setMetaDescription($metaDescription = null)
    {
        $this->metaDescription = $metaDescription;
    
        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }
    
        /**
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return Burger
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    
        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string 
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }


    /**
     * Set vote
     *
     * @param \FiveMinTo\BurgerBundle\Entity\Vote $vote
     * @return Burger
     */
    public function setVote(\FiveMinTo\BurgerBundle\Entity\Vote $vote = null)
    {
        $this->vote = $vote;
    
        return $this;
    }

    /**
     * Get vote
     *
     * @return \FiveMinTo\BurgerBundle\Entity\Vote 
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Add burgerIngredient
     *
     * @param \FiveMinTo\BurgerBundle\Entity\BurgerIngredient $burgerIngredient
     * @return Burger
     */
    public function addBurgerIngredient(\FiveMinTo\BurgerBundle\Entity\BurgerIngredient $burgerIngredient)
    {
        $this->burgerIngredient[] = $burgerIngredient;
    
        return $this;
    }

    /**
     * Remove burgerIngredient
     *
     * @param \FiveMinTo\BurgerBundle\Entity\BurgerIngredient $burgerIngredient
     */
    public function removeBurgerIngredient(\FiveMinTo\BurgerBundle\Entity\BurgerIngredient $burgerIngredient)
    {
        $this->burgerIngredient->removeElement($burgerIngredient);
    }

    /**
     * Get burgerIngredient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBurgerIngredient()
    {
        return $this->burgerIngredient;
    }
}