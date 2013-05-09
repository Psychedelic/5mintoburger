<?php

namespace FiveMinTo\BurgerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FiveMinTo\BurgerBundle\Entity\VoteRepository")
 */
class Vote
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
     * @var integer
     *
     * @ORM\Column(name="votePositif", type="integer")
     */
    private $votePositif;

    /**
     * @var integer
     *
     * @ORM\Column(name="voteNegatif", type="integer")
     */
    private $voteNegatif;


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
     * Set votePositif
     *
     * @param integer $votePositif
     * @return Vote
     */
    public function setVotePositif($votePositif)
    {
        $this->votePositif = $votePositif;
    
        return $this;
    }

    /**
     * Get votePositif
     *
     * @return integer 
     */
    public function getVotePositif()
    {
        return $this->votePositif;
    }

    /**
     * Set voteNegatif
     *
     * @param integer $voteNegatif
     * @return Vote
     */
    public function setVoteNegatif($voteNegatif)
    {
        $this->voteNegatif = $voteNegatif;
    
        return $this;
    }

    /**
     * Get voteNegatif
     *
     * @return integer 
     */
    public function getVoteNegatif()
    {
        return $this->voteNegatif;
    }
}
