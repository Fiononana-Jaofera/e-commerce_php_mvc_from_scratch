<?php

namespace App\Http\Controllers\Products;

use Framework\Routing\Router;

class DeleteProductsController
{
    protected Router $router;
    protected array $products;

    public function __construct(Router $router, array $products)
    {
        $this->router = $router;
        $this->products = $products;
    }

    public function handle()
    {
        $parameters = $this->router->current()->parameters();
        $parameters['category'] ??= 'all';
        return view('products/product-list', [
            'category' => $parameters['category'],
            'products' => $this->products,
            'delete' => true,
        ] );
    }
}