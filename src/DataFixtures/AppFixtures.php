<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
//use App\Factory\AdminFactory;
//use App\Factory\ClientFactory;
use App\Factory\CommandeFactory;
//use App\Factory\LivreurFactory;
use App\Factory\PlatFactory;
use App\Factory\ResetPasswordRequestFactory;
use App\Factory\RestaurantFactory;
use App\Factory\UserFactory;



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
        //AdminFactory::createMany(10);
       // ClientFactory::createMany(10);
        CommandeFactory::createMany(10);
        //LivreurFactory::createMany(10);
        PlatFactory::createMany(10);
        //ResetPasswordRequestFactory::createMany(10);
        RestaurantFactory::createMany(10);
        UserFactory::createMany(1);
        $manager->flush();
    }
}
