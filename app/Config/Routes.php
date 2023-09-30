<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('dashboard', 'MainController::dashboard');
$routes->post('/signin', 'AuthController::signin');
$routes->post('/login', 'AuthController::login');
