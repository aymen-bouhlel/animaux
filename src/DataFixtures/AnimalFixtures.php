<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Continent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $continent1 = new Continent();
        $continent1->setLibelle("Europe");
        $manager->persist($continent1);

        $continent2 = new Continent();
        $continent2->setLibelle("Asia");
        $manager->persist($continent2);

        $continent3 = new Continent();
        $continent3->setLibelle("Afrique");
        $manager->persist($continent3);

        $continent4 = new Continent();
        $continent4->setLibelle("Océanie");
        $manager->persist($continent4);

        $continent5 = new Continent();
        $continent5->setLibelle("Amérique");
        $manager->persist($continent5);

        $f1 = new Famille();
        $f1->setLibelle("Mammiféres")
            ->setDescription("Animaux vertébrés nourrissent leurs petits avec du lait.")
        ;
        $manager->persist($f1);

        $f2 = new Famille();
        $f2->setLibelle("Reptiles")
            ->setDescription("Animaux vertébrés qui rampent.")
        ;
        $manager->persist($f2);

        $f3 = new Famille();
        $f3->setLibelle("Poissons")
            ->setDescription("Animaux invertébrés du monde aquatique.")
        ;
        $manager->persist($f3);


        $a1 = new Animal();
        $a1->setNom("Chien")
            ->setDescription("un animal domistique")
            ->setImage("chien.png")
            ->setPoids(10)
            ->setDangereux(false)
            ->setFamille($f1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("Cochon")
            ->setDescription("un animal d'élevage")
            ->setImage("cochon.png")
            ->setPoids(300)
            ->setDangereux(false)
            ->setFamille($f1)
            ->addContinent($continent1)
            ->addContinent($continent5)
        ;
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom("Serpent")
            ->setDescription("un animal dangereux")
            ->setImage("serpent.png")
            ->setPoids(5)
            ->setDangereux(true)
            ->setFamille($f2)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("Crocodile")
            ->setDescription("un animal trés dangereux")
            ->setImage("crocodile.png")
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($f2)
            ->addContinent($continent3)
            ->addContinent($continent4)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("Requin")
            ->setDescription("un animal marin trés dangereux")
            ->setImage("requin.png")
            ->setPoids(800)
            ->setDangereux(true)
            ->setFamille($f3)
            ->addContinent($continent4)
            ->addContinent($continent5)
        ;
        $manager->persist($a5);


        $manager->flush();
    }
}
