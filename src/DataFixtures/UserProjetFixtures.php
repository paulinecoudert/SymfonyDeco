<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\User;
use App\Entity\Projet;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class UserProjetFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $repProjet = $manager->getRepository(Projet::class);
        $projets = $repProjet->findAll();
        $repUser = $manager->getRepository(User::class);
        $users = $repUser->findAll();



        foreach ($users as $user) {

            $projet = $projets[array_rand($projets)];

            $projet->addUser($user);

            // crear el identificador del hospital
            $user->setIdentificador($projet->getCodigo() . "-" . $user->getId());
        }



        $manager->flush();


        // $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProjetFixtures::class,
            ProjetFixtures::class,
        ];
    }
}
