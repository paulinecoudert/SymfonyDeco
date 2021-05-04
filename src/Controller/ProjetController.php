<?php

namespace App\Controller;

use App\Entity\Projet;
use Cocur\Slugify\Slugify;
use App\Repository\ProjetRepository;

// Include paginator interface

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;


class ProjetController extends AbstractController
{
    private $repository;


    public function __construct(ProjetRepository $repository)
    {
        $this->repository = $repository;
    }

    #[Route("/projet", name: 'front.projet')]

    public function projet(PaginatorInterface $paginator, Request $request): Response

    {

        $projetss = $paginator->paginate(
            $this->repository->findDemandeQuery(),
            $request->query->getInt('page', 1),
            12,
        );

        //dump($projetss);

        return $this->render("front/projet.html.twig", ['projetss' => $projetss]);
    }

    #[Route("/projet", name: 'projet')]
    public function projet2(): Response
    {

        $projet = $this->repository->findLatest();
        dump($projet);

        return $this->render("front/projet.html.twig");
    }


    //Renvoie le projet en détail
    #[Route("/projet/{slug}-{id}", name: 'front.show')]
    public function show($slug, $id): Response
    {
        $projet = $this->repository->find($id);
        return $this->render("front/show.html.twig", ['projet' => $projet]);
    }
}
