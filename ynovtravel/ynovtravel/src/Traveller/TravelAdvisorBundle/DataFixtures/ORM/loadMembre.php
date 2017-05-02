<?php

namespace Traveller\TravelAdvisorBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Traveller\TravelAdvisorBundle\Entity\Membre;

class LoadMembre implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $membre = new Membre();
        $membre->setNom('Jean');
        $membre->setPrenom('Jaune');
        $membre->setEmail('jean@jaune.com');
        $membre->setPassword('password');
        $manager->persist($membre);

        $membre = new Membre();
        $membre->setNom('Fred');
        $membre->setPrenom('Rouge');
        $membre->setEmail('fred@rouge.com');
        $membre->setPassword('pass123');
        $manager->persist($membre);

        $manager->flush();
    }
}