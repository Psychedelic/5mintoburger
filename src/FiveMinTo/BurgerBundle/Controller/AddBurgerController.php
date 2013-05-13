<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Entity\Vote;
use FiveMinTo\BurgerBundle\Form\BurgerType;

class AddBurgerController extends Controller
{

    public function addBurgerAction()
    {
    	$em = $this->container->get('doctrine')->getManager();
    	
    	$burger = new Burger();
    	$form = $this->createForm(new BurgerType(), $burger);
    	
    	$request = $this->getRequest();
    	if($request->isMethod('POST')){
	    	$form->bindRequest($request);
	    	$burger = $form->getData();
	    		    
	    	$em->persist($burger->getVote());
	    	$em->flush();

	    	$em->persist($burger);
	    	$em->flush();
	    	
    	}
    	
        return $this->render('FiveMinToBurgerBundle:Default:addBurger.html.twig', array(
        	'form' => $form->createView(),
        ));
    }
}
