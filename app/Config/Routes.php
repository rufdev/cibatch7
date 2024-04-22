<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('office', 'OfficeController::index');

$routes->resource('offices',['controller' => 'OfficeController']);

service('auth')->routes($routes);
