<?php

namespace App\Controller;

use App\Entity\Artisan;
use App\Entity\Projet;

use App\Form\ArtisanType;
use App\Notification\ArtisanNotification;
use Cocur\Slugify\Slugify;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
// Include paginator interface

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;


class ProjetController extends AbstractController
{
    private $repository;


    public function __construct(ProjetRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
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
    public function show(Projet $projet, string $slug, $id, Request $request, ArtisanNotification $notification): Response
    {
        $projet = $this->repository->find($id);

        $artisan = new Artisan();
        $artisan->setProjet($projet);

        $form = $this->createForm(ArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $notification->notify($artisan);
            $this->addFlash('success', 'votre email a bien été envoyé vous aurez une réponse sous 72h');
            $this->em->persist($artisan);
            $this->em->flush();

            return $this->redirectToRoute('front.show', [
                'id' => $projet->getId(),
                'slug' => $projet->getSlug(),

            ]);
        }


        return $this->render("front/show.html.twig", ['projet' => $projet, 'form' => $form->createView()]);
    }
}
