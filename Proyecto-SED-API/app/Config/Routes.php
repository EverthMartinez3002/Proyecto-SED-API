<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Home::register');

$routes->get('/login', 'Home::login');

$routes->get('/user', 'Home::user');

$routes->group('user', function ($routes) {
    $routes->post('create', 'UsuarioController::guardar');
    $routes->post('login', 'UsuarioController::login');
});

$routes->group('admin', function ($routes) {
    $routes->post('create', 'AdminController::guardar');
});

$routes->group('super-admin', function ($routes) {
    $routes->post('create', 'SuperAdminController::guardar');
});

$routes->group('marcacion', function ($routes) {
    $routes->post('create', 'MarcacionController::guardar');
});
