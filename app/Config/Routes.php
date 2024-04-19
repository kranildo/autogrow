<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Defining routes using the RouteCollection object

// Route for the homepage, pointing to the index method of the Calculator controller
$routes->get('/', 'Calculator::index');

// Route for processing payments, pointing to the createPayment method of the Payment controller
$routes->post('/payment', 'Payment::createPayment');

// Route for displaying products, pointing to the index method of the ProductController controller
$routes->get('/products', 'ProductController::index');
