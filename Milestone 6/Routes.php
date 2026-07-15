<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('api', function ($routes) {

    $routes->get('reviews', 'Api\\ReviewController::index');

    $routes->get('reviews/(:num)', 'Api\\ReviewController::show/$1');

    $routes->post('reviews', 'Api\\ReviewController::create');

    $routes->put('reviews/(:num)', 'Api\\ReviewController::update/$1');

    $routes->delete('reviews/(:num)', 'Api\\ReviewController::delete/$1');
});
