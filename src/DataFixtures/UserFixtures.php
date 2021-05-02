<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword($this->encoder->encodePassword($user, 'admin'));
        $user->setNom('Renard');
        $user->setPays('Belgique');
        $user->setCodePostal(1190);
        $user->setNumero(6);
        $user->setPrenom('Loic');
        $user->setRue('Rue de l\'Etoile');
        $user->setEmail('loic@gmail.com');
        $user->setVille('Forest');
        $manager->persist($user);
        $manager->flush();
    }
}
