<?php

namespace App\Controllers;

// This class represents a controller named ProductController which extends the BaseController
class ProductController extends BaseController
{
    // Method to handle the index route
    public function index()
    { 
        // Returning the view named 'products'
        return view('products');
    }
}
