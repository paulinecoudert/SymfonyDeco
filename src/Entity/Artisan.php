<?php

namespace App\Entity;

use App\Repository\ArtisanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ArtisanRepository::class)
 */
class Artisan
{
    const METIER = [
        1 => 'Electricien',
        2 => 'Peintre',
        3 => 'Plombier',
        4 => 'Renovation sdb',
        5 => 'Renovation cuisine',
        6 => 'Poseur de sol',
        7 => 'Poseur papier peint',
        8 => 'Demolition mur',
        9 => 'Renovation mur',
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, max=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email()
     */
    private $email;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var Projet|null
     */

    private $projet;

    /**
     * @ORM\Column(type="integer")
     */
    private $metier;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }



    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }



    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of projet
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set the value of projet
     *
     * @return  self
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;

        return $this;
    }

    public function getMetier(): ?int
    {

        return $this->metier;
    }

    public function setMetier(int $metier): self
    {
        $this->metier = $metier;

        return $this;
    }

    public function getMetierType(): string
    {

        return self::METIER[$this->metier];
    }
}
