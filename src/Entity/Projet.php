<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File;
use Symfony\Component\HttpFoundation\File\File as FileFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 * @UniqueEntity("nom")
 * @Vich\Uploadable()
 */
class Projet
{
    const STATUT = [
        true => 'Finit',
        false => 'A la recherche d\' un artisan '
    ];
    const TRAVAUX = [
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
     * @Assert\Length(min=5, max=40)
     */
    private $nom;


    /**
     * @ORM\Column(type="float")
     * @Assert\Range(min=100, max=500000)
     */
    private $budget;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeDebut;

    public function __construct()
    {
        $this->dateDeDebut = new \DateTime();
    }

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $filename;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="property_image", fileNameProperty="filename")
     * 
     */
    private $imageFile;


    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;



    /**
     * @ORM\Column(type="integer")
     */
    private $travaux;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="projets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;






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

    public function getSlug(): string
    {

        return (new Slugify())->slugify($this->nom);
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }



    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDeDebut(): ?\DateTimeInterface
    {
        return $this->dateDeDebut;
    }

    public function setDateDeDebut(\DateTimeInterface $dateDeDebut): self
    {
        $this->dateDeDebut = $dateDeDebut;

        return $this;
    }


    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getStatutType(): string
    {
        return self::STATUT[$this->statut];
    }



    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of filename
     *
     * @return  string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @param  string|null  $filename
     *
     * @return  self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get the value of imageFile
     *
     * @return  File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set the value of imageFile
     *
     * @param  File  $imageFile
     *
     * @return  self
     */
    public function setImageFile(FileFile $imageFile)
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile) {
            $this->dateDeDebut = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get the value of travaux
     */ 
    public function getTravaux()
    {
        return $this->travaux;
    }

    /**
     * Set the value of travaux
     *
     * @return  self
     */ 
    public function setTravaux($travaux)
    {
        $this->travaux = $travaux;

        return $this;
    }

    public function getTravauxType(): string
    {

        return self::TRAVAUX[$this->travaux];
    }
}
