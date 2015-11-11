<?php
/**
 * File name: user-group-admin.spec.php
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

use Notes\Domain\Entity\UserGroup\Admins;
use Notes\Domain\ValueObject\User;


describe('Notes\Domain\ValueObject\Admins', function () {
    describe('->__construct()', function () {
        it('should return a Owner object', function () {
            $actual = new Admins();

            expect($actual)->to->be->instanceof(
                '\Notes\Domain\ValueObject\Admins'
            );
        });
    });

    describe('->__construct("foo")', function () {
        it('should return a Username object with the value of "foo"', function () {
            $value = 'foo';
            $actual = new Admins();
            $userName = $actual->addUser($value);

            expect($userName)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($userName->__toString())->equal(true);
        });
    });

    describe('->__construct("foo")', function () {
        it('should return a Username object with the value of "foo"', function () {
            $value = 'foo';
            $actual = new Admins();
            $userName = $actual->getUsers();

            expect($userName)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($userName->__toString())->equal($value);
        });
    });

    describe('->__construct("foo")', function () {
        it('should return a Username object with the value of "foo"', function () {
            $value = 'foo';
            $actual = new Admins();
            $userName = $actual->removeUser($value);

            expect($userName)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($userName->__toString())->equal(true);
        });
    });

    describe('->__construct("foo")', function () {
        it('should return a Username object with the value of "foo"', function () {
            $value = 'foo';
            $actual = new Admins();
            $userName = $actual->getName();

            expect($userName)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($userName->__toString())->equal($value);
        });
    });

/*
    describe('->__construct(123)', function () {
        it('should return an InvalidArgumentException', function () {
            try {
                new StringLiteral(123);
            } catch (Exception $e) {
                expect($e)->to->be->instanceof('\InvalidArgumentException');
            }
        });
    });
    describe('->__toString()', function () {
        it('should return the default', function () {
            $actual = new StringLiteral();

            expect($actual->__toString())->equal('');
        });
        it('should return "foo"', function () {
            $value = 'foo';
            $actual = new StringLiteral($value);

            expect($actual)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($actual->__toString())->equal($value);
        });
    });
*/
});

