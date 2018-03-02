<?php


namespace App\DataFixtures\ORM;


use App\Entity\Message;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class MessageFixture extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {


        $message = new Message();
        $message->setTitle("donne chat")
                ->setAuthor($this->getReference("user_1"))
                ->setCategory($this->getReference("cat_don"))
                ->setText("un chat")
                ->setClosed(true);
        $manager->persist($message);


        $message = new Message();
        $message->setTitle("donne chien")
            ->setAuthor($this->getReference("user_2"))
            ->setCategory($this->getReference("cat_rech"))
            ->setText("un chien")
            ->setClosed(false);
        $manager->persist($message);

        $message = new Message();
        $message->setTitle("donne oiseua")
            ->setAuthor($this->getReference("user_3"))
            ->setCategory($this->getReference("cat_rech"))
            ->setText("un oiseaux")
            ->setClosed(false);
        $manager->persist($message);

        $message = new Message();
        $message->setTitle("donne cheval")
            ->setAuthor($this->getReference("user_4"))
            ->setCategory($this->getReference("cat_don"))
            ->setText("un cheval")
            ->setClosed(false);
        $manager->persist($message);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 10;
    }
}