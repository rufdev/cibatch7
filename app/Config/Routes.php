<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'DashboardController::index');

// $routes->get('office', 'OfficeController::index');

$routes->resource('offices',['controller' => 'OfficeController', 'filter' => 'group:admin,user']);
$routes->resource('tickets',['controller' => 'TicketController', 'filter' => 'group:admin,user']);

service('auth')->routes($routes);
