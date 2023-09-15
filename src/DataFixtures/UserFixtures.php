<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private sluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
            $admin = new User;
            $admin->setEmail('nounage@demo.fr');
            $admin->setLastname('Johnson');
            $admin->setFirstname('nany');
            $admin->setAdress('Ndiolofene/Sor');
            $admin->setZipcode('25000');
            $admin->setCity('Saint-Louis');
            $admin->setPassword(
                $this->passwordEncoder->hashPassword($admin, 'admin')
            );
            $admin->setRoles('ROLE_ADMIN');
            $manager->persist($admin);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
