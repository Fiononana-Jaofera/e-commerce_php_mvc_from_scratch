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
            'users/user-list', 
            [
                'admin' => true,
                'users' => $this->users,
            ] 
        );
    }
}