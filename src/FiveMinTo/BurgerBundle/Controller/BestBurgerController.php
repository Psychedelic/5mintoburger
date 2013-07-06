<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Entity\BurgerIngredient;
use FiveMinTo\BurgerBundle\Entity\Vote;
use FiveMinTo\BurgerBundle\Form\BurgerType;
use FiveMinTo\BurgerBundle\Form\BurgerIngredientType;

class BestBurgerController extends Controller
{
	public function bestBurgerAction()
	{
		$repository = $this->getDoctrine()->getManager()->getRepository('FiveMinToBurgerBundle:Burger');
		// $em = $this->container->get('doctrine')->getEntityManager();
		//$bestBurger = $repository->findOneById(1);
		// $burgers = $em->getRepository("FiveMinToMyBurgerBundle:Post")->findAll();

		/*$query = $repository->createQuery(
		    'SELECT p FROM BurgerBundle:Burger b JOIN BurgerBundle:Vote v WHERE v.votePositif > v.voteNegatif AND b.vote_id = v.id ORDER BY v.votePositif ASC'
		)*/
		
				$query = $repository->createQuery(
		    'SELECT b FROM BurgerBundle:Burger b JOIN BurgerBundle:Vote v WHERE v.votePositif > v.voteNegatif AND b.vote_id = v.id ORDER BY v.votePositif ASC'
		);

		$products = $query->getResult();

        return $this->render('FiveMinToBurgerBundle:Default:bestBurger.html.twig', array(
        	'bestBurger' => $products
        ));
        


		
	}
}