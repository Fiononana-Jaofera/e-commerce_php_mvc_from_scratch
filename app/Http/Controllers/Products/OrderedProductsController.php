<?php

namespace App\Http\Controllers\Products;

class OrderedProductsController
{
    protected array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function handle()
    {
        return view('products/product-ordered', [
            'products' => $this->products
        ]);
    }
    }