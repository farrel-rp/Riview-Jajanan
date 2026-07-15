<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/payment', 'PaymentController::index');

$routes->post('/payment/token', 'PaymentController::token');

$routes->post('/payment/finish', 'PaymentController::finish');
