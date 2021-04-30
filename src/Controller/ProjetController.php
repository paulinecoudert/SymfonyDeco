<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Projet;
use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    private $repository;

    public function __construct(ProjetRepository $repository)
    {
        $this->repository = $repository;
    }

    #[Route("/projet", name: 'projet')]
    public function projet(): Response
    {
        // $projet = new Projet();
        // $projet->setNom("test")
        //     ->setBudget(1000)
        //     ->setTravaux('sol')

        //     ->setStatut(true)
        //     ->setPhoto('salonelec.jpg')
        //     ->setDescription("kdjkfk");

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($projet);
        // $em->flush();

        $projet = $this->repository->finAllDemande();
        dump($projet);

        return $this->render("front/projet.html.twig");
    }
}
