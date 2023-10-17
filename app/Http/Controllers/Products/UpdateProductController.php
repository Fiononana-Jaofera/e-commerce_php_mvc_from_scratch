<?php

namespace App\Http\Controllers\Products;

use Framework\Routing\Router;

class UpdateProductController
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
        foreach( $this->products as $key => $product ) {
            if( $product['id'] == $parameters['id'] ) {
                return view('products/product-form', [
                    'update' => true,
                    'product' => $product,
                ]);
            }
            else continue;
        }
    }
}