<?php

namespace App\Http\Controllers\Products;

use Framework\Routing\Router;

class ListProductsController
{
    protected Router $router;
    protected bool $isAdmin;
    protected array $products, $categories;

    public function __construct( Router $router, array $products, array $categories, bool $isAdmin = false )
    {
        $this->router = $router;
        $this->products = $products;
        $this->categories = $categories;
        $this->isAdmin = $isAdmin;
    }

    public function handle()
    {
        $parameters = $this->router->current()->parameters();
        $parameters['category'] ??= 'all';
        if ( $this->isAdmin ) {
            return view('products/product-list', [
                'categories' => $this->categories['admin'],
                'category' => $parameters['category'],
                'products' => $this->products,
                'delete' => false,
            ] );
        }
        else
        {
            return view('home', [
                'categories' => $this->categories['user-simple'],
                'category' => $parameters['category'],
                'products' => $this->products,
            ] );
        }
    }
}