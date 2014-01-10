<?php

namespace XimoPruebaBundle\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Controller extends Controller
{
    public function indexAction($name)
    {
        return $this->render('XimoPruebaBundlePruebaBundle:Default:index.html.twig', array('name' => $name));
    }
}
