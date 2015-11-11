<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 11/7/2015
 * Time: 11:20 PM
 */

namespace Notes\Domain\Entity\UserGroup;



use Notes\Domain\Entity\User;

class Admins implements  UserGroupInterface
{

    public function addUser(User $user)
    {
        // TODO: Implement addUser() method.
    }

    public function getUsers()
    {
        // TODO: Implement getUsers() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function removeUser(User $user)
    {
        // TODO: Implement removeUser() method.
    }
}