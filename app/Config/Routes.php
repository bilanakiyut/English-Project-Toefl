<?php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');

$routes->get('materi', 'MateriController::index');
$routes->get('materi/structure/noun_clause', 'MateriController::noun_clause');
$routes->get('materi/structure/structure', 'MateriController::structure');

$routes->get('materi/writing/writing', 'MateriController::writing');
$routes->get('materi/writing/parallel-structure', 'MateriController::parallel_structure');
$routes->get('materi/writing/parallel-coordinate', 'MateriController::parallel_coordinate_conjuction');
$routes->get('materi/writing/parallel-paired', 'MateriController::parallel_paired_conjuction');

$routes->get('materi/writing/present-articiple', 'MateriController::present_participle');
$routes->get('materi/writing/past-participle', 'MateriController::past_participle');
$routes->get('materi/writing/present-participle-after-be', 'MateriController::present_participle_after_be');
$routes->get('materi/writing/base-form', 'MateriController::base_form');

$routes->get('materi/reading/reading', 'MateriController::reading');
$routes->get('materi/reading/skimming-scanning', 'MateriController::skimming_scanning');
$routes->get('materi/reading/vocabulary', 'MateriController::vocabulary');
$routes->get('materi/reading/main-idea', 'MateriController::main_idea');
$routes->get('materi/listening/listening', 'MateriController::listening');