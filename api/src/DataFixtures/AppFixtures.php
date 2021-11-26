<?php
namespace App\DataFixtures;

use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager){
        $faker = Factory::create('fr_FR');

        // Users
        $user = new User();
        $user->setEmail('api@recommerce.fr')
            ->setPassword(password_hash('root', PASSWORD_DEFAULT))
            ->setRoles(["ROLE_ADMIN"]);

        $manager->persist($user);


        // Products
        $prd1 = new Product();
        $prd1->setName('Iphone 12')
            ->setPrice(1000)
            ->setBrand('Apple');

        $manager->persist($prd1);

        $prd2 = new Product();
        $prd2->setName('Iphone 13')
            ->setPrice(1100,99)
            ->setBrand('Apple');

        $manager->persist($prd2);

        $prd3 = new Product();
        $prd3->setName('Galaxy S13')
            ->setPrice(999)
            ->setBrand('Samsung');
        
        $manager->persist($prd3);

        $prd4 = new Product();
        $prd4->setName('Blackberry 21')
            ->setPrice(800)
            ->setBrand('Blackberry');

        $manager->persist($prd4);


        //Order

        $order1 = new Order();
        $order1->setEmail($faker->email)
            ->setCreatedAt(new DateTime())
            ->addProduct($faker->randomElement([$prd1, $prd2, $prd3, $prd4]));

        $manager->persist($order1);

        $order2 = new Order();
        $order2->setEmail($faker->email)
            ->setCreatedAt(new DateTime())
            ->addProduct($faker->randomElement([$prd1, $prd2, $prd3, $prd4]))
            ->addProduct($faker->randomElement([$prd1, $prd2, $prd3, $prd4]))
            ->addProduct($faker->randomElement([$prd1, $prd2, $prd3, $prd4]));

        $manager->persist($order2);

        $order3 = new Order();
        $order3->setEmail($faker->email)
            ->setCreatedAt(new DateTime())
            ->addProduct($faker->randomElement([$prd1, $prd2, $prd3, $prd4]))
            ->addProduct($faker->randomElement([$prd1, $prd2, $prd3, $prd4]));

        $manager->persist($order3);

        $manager->flush();
    }
}
