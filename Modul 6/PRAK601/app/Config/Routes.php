<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->setAutoRoute(true);
$routes->get('/news', 'News::index');
$routes->group('admin', function($routes){
	$routes->get('buku', 'Buku_crud::index');
    $routes->add('buku/new', 'Buku_crud::create');
	$routes->add('buku/(:segment)/edit', 'Buku_crud::edit/$1');
	$routes->get('buku/(:segment)/delete', 'Buku_crud::delete/$1');
});
$routes->post('Login/auth', 'User_Login::auth');
$routes->get('Login', 'User_Login::index');
$routes->get('logout', 'User_Login::logout');