<?php

namespace App\Repositories;
use App\User;

/**
 * Created by PhpStorm.
 * User: DrSnake
 * Date: 27/06/15
 * Time: 21:50
 */

class UserRepository {

    public function findByEmailOrCreate($userData, $provider)
    {
        $user = User::where('email',  '=', $userData->email)->first();

        if ($user) {
            $user->$provider    = $userData->id;
            $user->avatar       = $userData->avatar;

            $user->save();
        } else {
            $user = new User;
            $user->email    = $userData->email;
            $user->name     = $userData->name;
            $user->avatar   = $userData->avatar;

            $user->$provider = $userData->id;

            $user->save();
        }

        return $user;
    }
}