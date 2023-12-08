<?php

namespace App\Http\Controllers\Users;

use Framework\Routing\Router;

class ShowRegisterFormController
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router =  $router;
    }

    public function handle()
    {
        return view( 'users/signUp', [
            'router' => $this->router,
        ] );
    }
}