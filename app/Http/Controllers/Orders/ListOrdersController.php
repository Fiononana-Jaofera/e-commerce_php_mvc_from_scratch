<?php

namespace App\Http\Controllers\Orders;

class ListOrdersController
{
    protected array $orders;

    public function __construct(array $orders)
    {
        $this->orders = $orders;
    }

    public function handle()
    {
        return view('orders/order-list', [
            'orders' => $this->orders,
        ] );
    }
}