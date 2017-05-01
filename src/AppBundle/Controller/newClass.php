<?php
/**
 * Created by PhpStorm.
 * User: edvinas
 * Date: 17.4.23
 * Time: 19.49
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class newClass extends Controller
{
    /**
     * @Route("/new/{newName}")
     */
    public function showAction($newName)
    {
        $notes = [
            'Mano nauja klase yra labai paprasta',
            'Visa tai yra tik mokomasis sablonas'
        ];
        return $this->render('new/show.html.twig', [
            'name' => $newName,
            'notes' => $notes
        ]);

    }
}