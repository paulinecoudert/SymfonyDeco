<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use App\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProjetRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class AdminProjetController extends AbstractController
{
    public function __construct(ProjetRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    #[Route('/admin', name: 'admin.index')]
    public function index(): Response
    {

        $projets = $this->getUser()->getProjets();
        // dd($this->getUser());
        return $this->render('admin/index.html.twig', [
            'projets' => $projets
        ]);
    }

    //Creer projet 

    #[Route('/admin/create', name: 'admin.create')]
    public function new(Request $request)
    {
        $newProjet = new Projet();
        $form = $this->createForm(ProjetType::class, $newProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newProjet->setUser($this->getUser());
            $this->em->persist($newProjet);
            $this->em->flush();
            return $this->redirectToRoute('admin.index');
        }

        return $this->render(
            'admin/create.html.twig',
            [
                'newProjet' => $newProjet,
                'form' => $form->createView()
            ]
        );
    }


    #[Route('/admin/edit/{id}', name: 'admin.edit')]
    public function edit(Projet $projets, Request $request)
    {
        $form = $this->createForm(ProjetType::class, $projets);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Projet modifié avec succès');
            return $this->redirectToRoute('admin.index');
        }

        return $this->render(
            'admin/edit.html.twig',
            [
                'projets' => $projets,
                'form' => $form->createView()
            ]
        );
    }

    #[Route('/admin/delete/{id}', name: 'admin.delete')]
    public function delete(Projet $projetsSup)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($projetsSup);
        $em->flush();

        $this->addFlash('success', 'Projet supprimé avec succès');
        return $this->redirectToRoute('admin.index');
    }
}
