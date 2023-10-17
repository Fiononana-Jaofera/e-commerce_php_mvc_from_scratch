<?php

namespace App\Http\Controllers\Products;

class RegisterProductController
{

    public function __construct()
    {

    }

    public function handle()
    {
        return view('products/product-form');
    }
}