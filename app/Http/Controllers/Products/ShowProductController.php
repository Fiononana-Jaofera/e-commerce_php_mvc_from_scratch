<?php

namespace App\Http\Controllers\Products;

use Framework\Routing\Router;

class ShowProductsController
{
    protected array $products;
    protected Router $router;
    protected bool $isAdmin;

    public function __construct(Router $router, array $products, bool $isAdmin)
    {
        $this->router = $router;
        $this->products = $products;
        $this->isAdmin = $isAdmin;
    }

    public function handle()
    {
        $parameters = $this->router->current()->parameters();
        foreach( $this->products as $key => $product) {
            if( $product['id'] == $parameters['id'] ) {
                return view('products/product-details', [
                    'admin' => $this->isAdmin,
                    'product' => $product
                ] );
            }
            else continue;
        }
    }
}