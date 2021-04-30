<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{



    #[Route("/index", name: 'index')]
    public function index(ProjetRepository $repository): Response
    {
        $projetss = $repository->findLatest();
        dump($projetss);
        return $this->render("front/index.html.twig", ['projetss' => $projetss]);
    }



    #[Route("/contact", name: 'contact')]
    public function contact(): Response
    {
        return $this->render("front/contact.html.twig");
    }

    #[Route("/login", name: 'login')]
    public function login(): Response
    {
        return $this->render("front/login.html.twig");
    }

    #[Route("/inscription", name: 'inscription')]
    public function inscription(): Response
    {
        return $this->render("front/inscription.html.twig");
    }
}
