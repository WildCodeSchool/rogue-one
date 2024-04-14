<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MemberFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $membersData = [
            [
                'firstname' => 'Chouiab',
                'lastname' => 'JANAH',
                'role' => 'Product Owner',
                'img' => 'member1.png',
                'link' => 'https://www.linkedin.com/in/cjanah/',
                'description' => "Description du Product Owner",
            ],
            [
                'firstname' => 'Joël',
                'lastname' => 'MAYEMBA',
                'role' => 'Scrum Master',
                'img' => 'member2.png',
                'link' => 'https://www.linkedin.com/in/mayemba/',
                'description' => "Description du Scrum Master",
            ],
        ];

        foreach ($membersData as $memberData) {
            $member = new Member();
            $member->setFirstname($memberData['firstname']);
            $member->setLastname($memberData['lastname']);
            $member->setRole($memberData['role']);
            $member->setImg($memberData['img']);
            $member->setLink($memberData['link']);
            $member->setDescription($memberData['description']);
            $manager->persist($member);
        }

        $manager->flush();
    }
}
