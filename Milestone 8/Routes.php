<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/review', 'ReviewController::index');

$routes->get('/review/create', 'ReviewController::create');

$routes->post('/review/store', 'ReviewController::store');

$routes->get('/review/edit/(:num)', 'ReviewController::edit/$1');

$routes->post('/review/update/(:num)', 'ReviewController::update/$1');

$routes->get('/review/delete/(:num)', 'ReviewController::delete/$1');
