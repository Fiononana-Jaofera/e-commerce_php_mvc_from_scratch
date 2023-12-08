<?php

namespace App\Http\Controllers\Users;

use Framework\Routing\Router;

class RegisterUserController
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handle()
    {
        $data = validate($_POST, [
            'name' => ['required'],
            'password' => ['required', 'min:10'],
            'confirm_password' => ['required', 'min:10']
        ]);

        // use $data to create a dabatabase record...
        $_SESSION['registered'] = true;

        return redirect($this->router->route('home-page'));
    }
}