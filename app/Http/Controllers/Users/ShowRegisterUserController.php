<?php

namespace App\Http\Controllers\Users;

class ShowRegisterUserController
{

    public function __construct()
    {

    }

    public function handle()
    {
        return view( 'users/signUp' );
    }
}