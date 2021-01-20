<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');
        
        for ($i = 0; $i < 50; $i++) {
            // Création d'un produit
            $product = new Product();
            $product
                ->setName("Produit " . $i)
                ->setDescription($faker->realText(1000))
                ->setPrice(rand(100, 6000));

            // Sauvegarde en base
            $manager->persist($product);    
        }
        
        // Ecriture effective en base
        $manager->flush();
    }
}
