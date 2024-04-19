<?php

namespace App\Controllers;

// This class represents a controller named Calculator which extends the BaseController
class Calculator extends BaseController
{
    // This method handles the index route and returns a string
    public function index(): string
    {
        // It returns a view named 'calculator'
        return view('calculator');
    }
}
