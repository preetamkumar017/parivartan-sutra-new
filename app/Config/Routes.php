<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function ($routes) {

    $routes->get('login', 'AuthController::loginPage');
    $routes->post('login', 'AuthController::login');

    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('logout', 'AuthController::logout');

});