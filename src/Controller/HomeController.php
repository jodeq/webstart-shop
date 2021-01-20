<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $productRepo): Response
    {
        // Récupération des derniers produits
        $products = $productRepo->findAll();

        // Affichage de la page d'accueil
        return $this->render('home/index.html.twig', [
            'products' => $products,
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
