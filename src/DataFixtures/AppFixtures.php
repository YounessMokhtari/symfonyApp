<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new Utilisateur();
            $user->setNom($this->faker->word())
                ->setPrenom($this->faker->word())
                ->setDateNaissance(new \DateTime('1990-01-01'))
                ->setCne("123456")
                ->setTel("0123456789")
                ->setMotdePass("password123")
                ->setEmail("user@example.com");

            $manager->persist($user);
        }
        $manager->flush();
    }
}
