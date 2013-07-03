<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Entity\BurgerIngredient;
use FiveMinTo\BurgerBundle\Entity\Vote;
use FiveMinTo\BurgerBundle\Form\BurgerType;
use FiveMinTo\BurgerBundle\Form\BurgerIngredientType;

class DisplayBurgerController extends Controller
{
	public function displayBurgerAction()
	{
		$repository = $this->getDoctrine()->getManager()->getRepository('FiveMinToBurgerBundle:Burger');
		// $em = $this->container->get('doctrine')->getEntityManager();
		$listBurgers = $repository->findAll();
		// $burgers = $em->getRepository("FiveMinToMyBurgerBundle:Post")->findAll();


        return $this->render('FiveMinToBurgerBundle:Default:displayBurger.html.twig', array(
        	'listBurgers' => $listBurgers
        ));
		
	}
}
