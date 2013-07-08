<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FiveMinTo\BurgerBundle\Entity\Burger;

class RequestController extends Controller
{
    public function requestAction()
    {
        //return $this->render('FiveMinToBurgerBundle:Burger:request.html.twig', array('name' => $name));
        $em = $this->getDoctrine()->getManager();

        $bestBurger = $em->getRepository('FiveMinToBurgerBundle:Burger')->getBestBurger();

        return array(
            'bestBurgers' => $bestBurger,
        );
    }
}