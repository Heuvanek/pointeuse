<?php
 
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 
class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
            $this->passwordEncoder = $passwordEncoder;
     }
    public function load(ObjectManager $manager)
    {
        $user = new User();
 
        $user->setPassword($this->passwordEncoder->encodePassword(
                   $user,
                    '123'
                    ))->setEmail('ac@me.com')
                    ->setForName('armand')
                    ->setLastName('carlier')
                    ->setRoles(['ROLE_SUPER_ADMIN'])
                    ;
        $manager->persist($user);
 
        $user2 = new User();
 
        $user2->setPassword($this->passwordEncoder->encodePassword(
                   $user2,
                    '123'
                    ))->setEmail('jd@me.com')
                    ->setForName('john')
                    ->setLastName('doe')
                    ->setRoles(['ROLE_USER'])
                    ;
        $manager->persist($user2);
 
        $manager->flush();
    }
}
