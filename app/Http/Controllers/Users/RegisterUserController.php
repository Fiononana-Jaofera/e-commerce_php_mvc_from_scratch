<?php

namespace App\Http\Controllers\Users;

class RegisterUserController
{

    public function __construct()
    {

    }

    public function handle()
    {
        $data = validate( $_POST, [
            'name' => ['required'],
            'password' => ['required', 'min:6'],
        ]);

        // use to create database record
        $_SESSION['Registered'] = true;

        return redirect( $this->router->route('show-home-page') );
    }
}