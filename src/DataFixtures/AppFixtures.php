<?php

namespace App\DataFixtures;

<<<<<<< HEAD
use App\Entity\Event;
=======
>>>>>>> Fixtures
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        for ($i=0; $i<10; $i++ ) {
            $eventUser = new Event();
            $date= new \DateTimeImmutable("now");
            $eventUser->setEventName('Evènement '.$i+1)
                ->setDateEvent($date);
            $manager->persist($eventUser);
        }
=======
        // $product = new Product();
        // $manager->persist($product);

>>>>>>> Fixtures
        $manager->flush();
    }
}
