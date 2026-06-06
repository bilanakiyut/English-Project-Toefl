<?php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/materi', 'Home::materi');
$routes->get('materi', 'MateriController::index');
$routes->get('materi/structure', 'MateriController::structure');