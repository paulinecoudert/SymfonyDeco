<?php

namespace App\Notification;

use App\Entity\Artisan;

use Swift_Mailer;
use Twig\Environment;

class ArtisanNotification

{
    /**
     * var \Swift_Mailer
     */
    private $mailer;

    /**
     * var Environment
     */
    private $renderer;

    public function __construct(Environment $renderer, Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(Artisan $artisan)
    {
        $message = (new \Swift_Message('Projet: ' . $artisan->getProjet()->getNom()))
            ->setFrom($artisan->getEmail())
            ->setTo('contactProprietaire@ideco.fr')
            ->setReplyTo($artisan->getEmail())
            ->setBody($this->renderer->render('emails/contact.html.twig', [
                'contact' => $artisan
            ]), 'text/html');
        $this->mailer->send($message);
    }
}
