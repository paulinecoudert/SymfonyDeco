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
        $user2 = new User();
        $user2->setUsername('test');
        $user2->setPassword($this->encoder->encodePassword($user2, '1234'));
        $user2->setNom('Lo');
        $user2->setPays('Belgique');
        $user2->setCodePostal(1060);
        $user2->setNumero(13);
        $user2->setPrenom('Renata');
        $user2->setRue('Rue de l\'Abbaye');
        $user2->setEmail('renata@gmail.com');
        $user2->setVille('Saint gilles');
        $manager->persist($user2);
        $manager->flush();
    }
}
