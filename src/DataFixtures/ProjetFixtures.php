<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($count = 0; $count < 20; $count++) {
            $projet = new Projet();
            $projet->setNom("Des murs neufs " . $count);
            $projet->setTravaux("peinture" . $count);
            $projet->setStatut(1 . $count);
            $projet->setPhoto("MurBleu.jpg" . $count);
            $projet->setDescription("la djfg sdksjf" . $count);
            $projet->setBudget(1000 . $count);

            $manager->persist($projet);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
        );
    }
}
