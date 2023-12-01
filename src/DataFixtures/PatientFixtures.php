<?php

namespace App\DataFixtures;

use App\Entity\patient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;


class PatientFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger
    ) {
    }

    public function load(ObjectManager $manager): void
    {

        $patient = new Patient();
        $patient->setEmail('steven@hotmail0.fr');
        $patient->setPassword(
            $this->passwordEncoder->hashPassword($patient, 'antoine')
        );
        $patient->setRoles(['ROLE_PATIENT']);

        $patient->setNom('jean');
        $patient->setPrenom('Alfred');
        $patient->setVille('Bordeaux');
        $patient->setAllergenes('Gluten');
        $patient->setTypesRegimes('végétarien');
        $manager->persist($patient);



        $patient1 = new Patient();
        $patient1->setEmail('patient@gmail1.com');
        $patient1->setPassword(
            $this->passwordEncoder->hashPassword($patient1, 'secretPatient1')
        );
        $patient1->setRoles(['ROLE_PATIENT']);

        $patient1->setNom('juppe');
        $patient1->setPrenom('Carlos');
        $patient1->setVille('Cenon');
        $patient1->setAllergenes('Mollusques');
        $patient1->setTypesRegimes('végétarien');
        $manager->persist($patient1);



        $patient2 = new Patient();
        $patient2->setEmail('patient@gmail2.com');
        $patient2->setPassword(
            $this->passwordEncoder->hashPassword($patient2, 'secretPatient2')
        );
        $patient2->setRoles(['ROLE_PATIENT']);

        $patient2->setNom('juppe');
        $patient2->setPrenom('Carlos');
        $patient2->setVille('Cenon');
        $patient2->setAllergenes('Mollusques');
        $patient2->setTypesRegimes('Sans-viande');
        $manager->persist($patient2);



        $patient3 = new Patient();
        $patient3->setEmail('jeanpaul@gmail3.com');
        $patient3->setPassword(
            $this->passwordEncoder->hashPassword($patient3, 'secretPatient3')
        );
        $patient3->setRoles(['ROLE_PATIENT']);

        $patient3->setNom('Claude');
        $patient3->setPrenom('Cassia');
        $patient3->setVille('Begles');
        $patient3->setAllergenes('Arachide');
        $patient3->setTypesRegimes('Sans lactose');
        $manager->persist($patient3);

        $manager->flush();
    }
}
