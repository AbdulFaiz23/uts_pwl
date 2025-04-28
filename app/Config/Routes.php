<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ==== Auth Routes ====
$routes->get('/', function() {
    return redirect()->to('/login');
});

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');
$routes->post('/auth/logout', 'AuthController::logout'); // Logout route

// ==== Dashboard Routes ====
$routes->get('/dashboard/admin', 'DashboardController::admin', ['filter' => 'role:admin']);
$routes->get('/dashboard/user', 'DashboardController::user', ['filter' => 'role:user']);

// ==== Tugas Routes ====
$routes->get('/tugas', 'Tugas::index', ['filter' => 'role:user']); // Tugas untuk user



// ==== Grouping Routes with Filters ====
$routes->group('admin', ['filter' => 'role:admin'], function($routes) {
    $routes->get('/', 'DashboardController::admin');
    $routes->get('tugas', 'Tugas::index');
    
});

$routes->group('user', ['filter' => 'role:user'], function($routes) {
    $routes->get('/', 'DashboardController::user');
    $routes->get('tugas', 'Tugas::index');
});


