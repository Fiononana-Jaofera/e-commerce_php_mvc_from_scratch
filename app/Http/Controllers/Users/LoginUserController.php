<?php

namespace App\Http\Controllers\Users;

class LoginUserController
{

    public function __construct()
    {

    }

    public function handle()
    {
        return view( 'users/signIn' );
    }
}