<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('send', 'Home::send');

$routes->get('/contact', 'Contact::index');
$routes->post('/send-email', 'Contact::email');