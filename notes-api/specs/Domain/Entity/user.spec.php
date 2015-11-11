<?php
/**
 * File name: user.spec.php
 * Project: notes-api
 * PHP version 5
 * @category  PHP
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * @link      http://donbstringham.us
 * $LastChangedDate$
 * $LastChangedBy$
 */

use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;
use Notes\Domain\ValueObject\Uuid;

describe('Notes\Domain\Entity\User', function ()
{

    describe('->__construct()', function () {
        it('should return a User object', function () {
            $actual = new User();

            expect($actual)->to->be->instanceof('\Notes\Domain\Entity\User');
        });
    });

    describe('->getUserId()', function () {
        it('should return the user\'s userid', function () {
            $faker = \Faker\Factory::create();
            $userid = new Uuid($faker->setUserid);

            $user = new User();

            expect($user->getUserId())->equal($userid);
        });
    });

    describe('->getUsername()', function () {
        it('should return the user\'s username', function () {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->setUsername);
            $user = new User();

            expect($user->getUsername())->equal($username);
        });
    });

    describe('->getFirstname()', function () {
        it('should return the user\'s Name', function () {
            $faker = \Faker\Factory::create();
            $name = $faker->setFirstname;

            $user = new User();

            expect($user->getLastname())->equal($name);
        });
    });

    describe('->getLastname()', function () {
        it('should return the user\'s Name', function () {
            $faker = \Faker\Factory::create();
            $name = $faker->setLastname;

            $user = new User();

            expect($user->getLastname())->equal($name);
        });
    });

    describe('->getEmail()', function () {
        it('should return the user\'s EMail', function () {
            $faker = \Faker\Factory::create();
            $email = $faker->setEmail;

            $user = new User();

            expect($user->getEmail())->equal($email);
        });
    });

    describe('->getPhone()', function () {
        it('should return the user\'s phone', function () {
            $faker = \Faker\Factory::create();
            $phone = $faker->setPhone;

            $user = new User();

            expect($user->getPhone())->equal($phone);
        });
    });

});
