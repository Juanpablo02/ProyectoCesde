<?php

namespace Config;

use App\Controllers\RegisterController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'LoginController::index');
$routes->post('/sign-in', 'LoginController::signIn');
$routes->get('/register', 'RegisterController::index');
$routes->post('/add-user', 'RegisterController::addUser');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/sign-out', 'ProfileController::signOut');
$routes->get('/aparts', 'ApartController::index');
$routes->get('/delete-apart', 'ApartController::deleteApart');
$routes->get('/edit-apart','EditApartController::editApart');
$routes->post('/update-apart','EditApartController::updateApart');
$routes->get('/registerApart', 'RegisterApartController::index');
$routes->post('/add-apart', 'RegisterApartController::addApart');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
