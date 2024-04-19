<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Calculator::index');
$routes->post('/payment', 'Payment::createPayment');
$routes->get('/products', 'ProductController::index');
