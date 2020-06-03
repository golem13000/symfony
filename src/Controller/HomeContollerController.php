<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeContollerController extends AbstractController
{
    /**
     * @Route("/", name="home_contoller")
     */
    public function index()
    {
        return $this->render('home_contoller/index.html.twig', [
            'controller_name' => 'HomeContollerController',
        ]);
    }
}
