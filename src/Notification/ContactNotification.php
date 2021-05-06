<?php

namespace App\Notification;

use App\Entity\Contact;

use Swift_Mailer;
use Twig\Environment;

class ContactNotification

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

    public function notify(Contact $contact)
    {
        $message = (new \Swift_Message('Contact: ' . $contact->getNom()))
            ->setFrom($contact->getEmail())
            ->setTo('contact@ideco.be')
            ->setReplyTo($contact->getEmail())
            ->setBody($this->renderer->render('emails/contactSite.html.twig', [
                'contactform' => $contact
            ]), 'text/html');
        $this->mailer->send($message);
    }
}
