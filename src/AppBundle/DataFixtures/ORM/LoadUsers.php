<?php
/**
 * Created by PhpStorm.
 * User: simonas_b
 * Date: 9/26/2016
 * Time: 5:46 PM
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('test');
        $userAdmin->setFirstName("admin");
        $userAdmin->setLastName("admin");
        $userAdmin->setEmail("baltulionis.simonas@gmail.com");
        $userAdmin->setRoles(array('ROLE_ADMIN'));
        $userAdmin->setEnabled(true);
        $userAdmin->setCredentialsExpired(false);
        $userAdmin->setExpired(false);
        $userAdmin->setLocked(false);
        $manager->persist($userAdmin);

        $userAccountant = new User();
        $userAccountant->setUsername('accoutant');
        $userAccountant->setPassword('test');
        $userAccountant->setFirstName("accoutant");
        $userAccountant->setLastName("accoutant");
        $userAccountant->setEmail("accoutant@accoutant.com");
        $userAccountant->setRoles(array('ROLE_ACCOUNTANT'));
        $manager->persist($userAccountant);

        $userEmployee = new User();
        $userEmployee->setUsername('employee');
        $userEmployee->setPassword('test');
        $userEmployee->setFirstName("employee");
        $userEmployee->setLastName("employee");
        $userEmployee->setEmail("employee@employee.com");
        $userEmployee->setRoles(array('ROLE_User'));
        $manager->persist($userEmployee);

        $manager->flush();
    }
}
