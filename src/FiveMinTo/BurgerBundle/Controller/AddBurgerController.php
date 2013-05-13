<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Form\BurgerType;

class AddBurgerController extends Controller
{

    public function addBurgerAction()
    {
    	$em = $this->container->get('doctrine')->getManager();
    	
    	$form = $this->createForm(new BurgerType());
    	
        return $this->render('FiveMinToBurgerBundle:Default:addBurger.html.twig', array(
        	'form' => $form->createView(),
        ));
    }
}
