<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Entity\BurgerIngredient;
use FiveMinTo\BurgerBundle\Entity\Vote;
use FiveMinTo\BurgerBundle\Form\BurgerType;
use FiveMinTo\BurgerBundle\Form\BurgerIngredientType;

class AddBurgerController extends Controller
{
	public function addBurgerAction()
	{
		// On récupére l'EntityManager
		$em = $this->getDoctrine()->getManager();
		
		$burger = new Burger();

        $form = $this->createForm(new BurgerType(), $burger);
		
		$request = $this->getRequest();
    	if($request->isMethod('POST')){
	    	$form->bindRequest($request);	    	
	    	$burger = $form->getData();
	    		    
	    	$em->persist($burger->getVote());
	    	//$em->flush();
	    		  
	    	$em->persist($burger);
	    	$em->flush(); 
    	}
    	
        return $this->render('FiveMinToBurgerBundle:Default:addBurger.html.twig', array(
        	'form' => $form->createView(),
        ));
	}
}
