<?php
/**
 * Created by PhpStorm.
 * User: DrSnake
 * Date: 27/06/15
 * Time: 22:24
 */
namespace App;

interface AuthenticateUserListener
{
    public function userHasLoggedIn($user);
}