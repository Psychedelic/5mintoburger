<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FiveMinToBurgerBundle:Default:index.html.twig', array('name' => $name));
    }
}
