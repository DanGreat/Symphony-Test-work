<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * My test class controller
 */
class TestController extends Controller
{
	
 	/**
    *@Route("/home", name="defaultpage")
    */
    public function homeAction(){

        $number = random_int(1, 10);

        return new Response('<h1>The number gotten is:'.$number.'</h1>');
    }

    /**
    *@Route("/contact", name="contactpage")
    */
    public function contactAction(){

        return $this->render('default/contactpage.html.twig');
    }

    /**
    *@Route("/about", name="aboutpage")
    */
    public function aboutAction(){

        return $this->render('default/aboutpage.html.twig');
    }

    /**
    *@Route("/services", name="servicespage")
    */
    public function servicesAction(){

        return $this->render('default/servicespage.html.twig');
    }
}