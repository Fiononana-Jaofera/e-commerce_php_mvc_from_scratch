<?php

namespace App\Http\Controllers\Dashboard;

use Framework\Routing\Router;

class ShowDashboardController
{
    protected Router $router;
    protected array $orders;
    protected array $users;
    protected bool $isAdmin;
    protected array $user;

    public function __construct(Router $router, array $orders, array $users, bool $isAdmin = false, array $user = [] )
    {
        $this->router = $router;
        $this->orders = $orders;
        $this->users = $users;
        $this->isAdmin = $isAdmin;
        $this->user = $user;
    }

    public function handle()
    {
        $result = [];
        if ( $this->isAdmin ) {
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
        else {
            foreach($this->orders as $key => $order) {
                if($order['status'] == 'en cours'){
                    $result[] = $order; 
                }
            }
            return view('dashboard/dashboard', [
                'admin' => false,
                'user' => $this->user,
                'orders' => $result,
            ]);
        }
    }
}
