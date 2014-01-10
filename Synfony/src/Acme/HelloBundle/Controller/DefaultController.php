<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
//        return new Response('<html><body>Hello '.$name.'!</body></html>');
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));
        // si utilizas PHP en vez de Twig
        // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
    }
}
