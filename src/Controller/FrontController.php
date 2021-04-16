<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{


    #[Route("/index", name: 'index')]
    public function index(): Response
    {
        return $this->render("front/index.html.twig");
    }

    #[Route("/projet", name: 'projet')]
    public function projet(): Response
    {
        return $this->render("front/projet.html.twig");
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
