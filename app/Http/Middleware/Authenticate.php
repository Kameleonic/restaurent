<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Foundation\Auth\User;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }

    protected function redirectAdmin(Auth $user)
    {
        if (auth()->$user->usertype !== 0) {
            dd('user');
            return route('/redirects');
        } else {
            dd('admin');
            return view('/');
        }
    }
}
