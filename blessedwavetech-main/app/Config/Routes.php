<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');

$routes->get('service', 'Service::index');

$routes->get('products', 'Products::index');

$routes->get('dashboard', 'DashboardController::index');

