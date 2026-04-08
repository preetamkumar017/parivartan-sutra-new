<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function ($routes) {

    // Auth Routes
    $routes->get('login', 'AuthController::loginPage');
    $routes->post('login', 'AuthController::login');

    // Dashboard Route
    $routes->get('dashboard', 'DashboardController::index');

    // Logout Route
    $routes->get('logout', 'AuthController::logout');


   // Questions Routes
    $routes->get('questions', 'QuestionController::index');

    $routes->post('questions/save', 'QuestionController::save');

    $routes->post('questions/delete', 'QuestionController::delete');

    $routes->get('questions/get/(:num)', 'QuestionController::get/$1');

});