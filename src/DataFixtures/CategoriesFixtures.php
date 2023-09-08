<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
    //cela crée un "slug nous permetant de l'utiliser
    public function __construct(private SluggerInterface $slugger)
    {
    }

    public function load(ObjectManager $manager): void
    {


        $user = new Utilisateur();
        $user->setName('Dupont');
        $user->setEmail('dupont@dupont.com');
        $password = $this->passwordEncoder->hashPassword($user,'123456');
        $user->setPassword($password);

        $manager->flush();
    }
}
