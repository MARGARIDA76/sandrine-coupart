<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\patient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;


class UserFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger
    ) {
    }


    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail('admin@admin.fr');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'admin')
        );

        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);


        $user = new User();
        $user->setEmail('steven_gomes@hotmail.fr');
        $user->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'steven')
        );
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);



        $user1 = new User();
        $user1->setEmail('steven@hotmail0.fr');
        $user1->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'antoine')
        );
        $user->setRoles(['ROLE_PATIENT']);
        $manager->persist($user1);



        $user2 = new User();
        $user2->setEmail('patient@gmail1.com');
        $user2->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'secretPatient1')
        );
        $user2->setRoles(['ROLE_PATIENT']);
        $manager->persist($user2);






        $manager->flush();
    }
}
