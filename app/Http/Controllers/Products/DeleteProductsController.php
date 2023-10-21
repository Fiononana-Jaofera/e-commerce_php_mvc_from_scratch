<?php

namespace App\Http\Controllers\Products;

use Framework\Routing\Router;

class DeleteProductsController
{
    protected Router $router;
    protected array $products, $categories;

    public function __construct(Router $router, array $products, array $categories)
    {
        $this->router = $router;
        $this->products = $products;
        $this->categories = $categories;
    }

    public function handle()
    {
        $parameters = $this->router->current()->parameters();
        $parameters['category'] ??= 'all';
        return view('products/product-list', [
            'categories' => $this->categories['admin'],
            'category' => $parameters['category'],
            'products' => $this->products,
            'delete' => true,
        ] );
    }
}