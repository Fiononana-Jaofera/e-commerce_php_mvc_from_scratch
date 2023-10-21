<?php

namespace App\Http\Controllers\Users;

class RegisterUserController
{

    public function __construct()
    {

    }

    public function handle()
    {
        return view( 'users/signUp' );
    }
}