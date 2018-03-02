<?php


namespace App\DataFixtures\ORM;


use App\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixture extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $password=password_hash("123",PASSWORD_BCRYPT);

        $user = new User();
        $user->setName("User 1")
            ->setPassword($password)
            ->setEmail("user1@mail.fr");
        $manager->persist($user);
        $this->addReference("user_1",$user);

        $user = new User();
        $user->setName("User 2")
            ->setPassword($password)
            ->setEmail("user2@mail.fr");
        $manager->persist($user);
        $this->addReference("user_2",$user);

        $user = new User();
        $user->setName("User 3")
            ->setPassword($password)
            ->setEmail("user3@mail.fr");
        $manager->persist($user);
        $this->addReference("user_3",$user);

        $user = new User();
        $user->setName("User 4")
            ->setPassword($password)
            ->setEmail("user4@mail.fr");
        $manager->persist($user);
        $this->addReference("user_4",$user);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}