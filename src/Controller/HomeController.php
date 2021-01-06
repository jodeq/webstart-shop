<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/cgv", name="cgv")
     */
    public function cgv(): Response
    {
        return $this->render('home/cgv.html.twig', []);
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin(): Response
    {
        return new Response("OK");
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profile(): Response
    {
        return new Response("OK");
    }
}
