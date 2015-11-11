<?php
/**
 * File name: UserGroupInterface.php
 * Project: notes-api
 * PHP version 5
 * @category  PHP
 * @package   Notes\Domain\Entity\UserGroup
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * @link      http://donbstringham.us
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Notes\Domain\Entity\UserGroup;
use Notes\Domain\Entity\User;
interface UserGroupInterface
{
    /*
     * @param $user
     * @return bool
     */
    public function addUser(User $user);
    /*
     * @return Array
     */
    public function getUsers();
    /*
     * @return String
     */
    public function getName();

    /*
     * @returns bool
     */
    public function removeUser(User $user);


}
