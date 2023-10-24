<?php

namespace App\Http\Controllers\Users;

use Framework\Routing\Router;

class ShowLoginUserController
{
    protected Router $router;

    public function __construct( Router $router )
    {
        $this->router =  $router;
    }

    public function handle()
    {
        return view( 'users/signIn' );
    }
}