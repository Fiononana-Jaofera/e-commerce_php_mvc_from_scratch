<?php

namespace App\Http\Controllers\Dashboard;

use Framework\Routing\Router;

class ShowDashboardController
{
    protected Router $router;
    protected array $orders;
    protected array $users;

    public function __construct(Router $router, array $orders, array $users)
    {
        $this->router = $router;
        $this->orders = $orders;
        $this->users = $users;
    }

    public function handle()
    {
        $result = [];
        $parameters = $this->router->current()->parameters();
        foreach ( $this->orders as $key => $order ) {
            if ( $order['client'] == $parameters['id'] ) {
                $result['orders'][] = $order;
            }
        }

        foreach ( $this->users as $key => $user ) {
            if ( $user['id'] == $parameters['id'] ) {
                $result['user'] = $user;
            }
        }
        return view( 
            'dashboard/dashboard', 
            [
                'admin' => true,
                'user' => $result['user'],
                'orders' => $result['orders'],
            ] 
        );
    }
}
