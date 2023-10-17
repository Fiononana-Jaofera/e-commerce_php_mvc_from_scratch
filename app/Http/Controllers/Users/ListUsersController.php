<?php

namespace App\Http\Controllers\Users;

class ListUsersController
{
    protected array $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function handle()
    {
        return view( 
            'notifications/notification', 
            [
                'admin' => true,
                'users' => $this->users,
            ] 
        );
    }
}