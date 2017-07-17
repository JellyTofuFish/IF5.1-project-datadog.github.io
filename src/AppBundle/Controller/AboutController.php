<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about page")
     */
    public function description()
    {
        return $this->render('about/about.html.twig');
    }

   public function indexAction($name)
    {
        return $this->render('about/about.html.twig', array('name' => $name));
    }
}
