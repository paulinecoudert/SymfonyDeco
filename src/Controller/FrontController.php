<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ProjetRepository;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Notification\ContactNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{



    #[Route("/index", name: 'index')]
    public function index(ProjetRepository $repository): Response
    {
        $projetss = $repository->findLatest();

        return $this->render("front/index.html.twig", ['projetss' => $projetss]);
    }




    #[Route("/contact", name: 'contact')]
    public function contact(Request $request, ContactNotification $notification): Response

    {

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $notification->notify($contact);
            $notification->notify($contact);
            // $this->addFlash('success', 'votre email a bien été envoyé');
            $this->addFlash('success', 'votre email a bien été envoyé vous aurez une réponse sous 48h');
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('contact');
        }


        return $this->render("front/contact.html.twig",   [
            'contact' => $contact,
            'form' => $form->createView()
        ]);
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
