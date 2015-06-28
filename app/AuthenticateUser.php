<?php
/**
 * Created by PhpStorm.
 * User: DrSnake
 * Date: 27/06/15
 * Time: 21:48
 */

namespace App;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Auth\AuthManager;
use Laravel\Socialite\Contracts\Factory as Socialite;
use App\Repositories\UserRepository;

class AuthenticateUser {
    private $provider;

    /**
     * @var UserRepository
     */
    private $users;
    /**
     * @var Socialite
     */
    private $socialite;
    /**
     * @var Authenticator
     */
    private $auth;

    public function __construct(UserRepository $users, Socialite $socialite, AuthManager $auth)
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }

    /**
     * @param $hasCode
     * @param AuthenticateUserListener $listener
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function execute($request, AuthenticateUserListener $listener, $provider)
    {
        $this->provider = $provider;

        if (!$request) return $this->getAuthorizationFirst();

        $user = $this->users->findByEmailOrCreate($this->getUser(), $provider);

        $this->auth->login($user, true);

        return $listener->userHasLoggedIn($user);
    }

    private function getAuthorizationFirst()
    {
        return $this->socialite->driver($this->provider)->redirect();
    }

    private function getUser()
    {
        return $this->socialite->driver($this->provider)->user();
    }
}