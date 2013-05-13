<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FiveMinTo\BurgerBundle\Entity\Burger
use FiveMinTo\BurgerBundle\Form\BurgerType

class AddBurgerController extends Controller
{

    public function addBurger()
    {
    	$em = this->getDoctrine()->getEntityManager();
    	
    	$form = $this->createForm(new BurgerType());
    	
        return $this->render('FiveMinToBurgerBundle:Default:index.html.twig', array(
        	'form' => $form->createView(),
        ));
    }
}
