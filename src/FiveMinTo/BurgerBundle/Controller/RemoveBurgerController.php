<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Entity\BurgerIngredient;
use FiveMinTo\BurgerBundle\Entity\Vote;
use FiveMinTo\BurgerBundle\Form\BurgerType;
use FiveMinTo\BurgerBundle\Form\BurgerIngredientType;

class RemoveBurgerController extends Controller
{
	public function removeBurgerAction()
	{
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('FiveMinToBurgerBundle:Vote');
		// $em = $this->container->get('doctrine')->getEntityManager();
		$burgerToDelete = $repository->findOneById(1);

		$em->remove($burgerToDelete);
		$em -> flush();
		
		return $this->render('FiveMinToBurgerBundle:Default:removeBurger.html.twig', array(
        	'burgerDeleted' => $burgerToDelete
        ));
		
	}
}