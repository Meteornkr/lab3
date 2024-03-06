<?php

use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\main;
use App\Controllers\photos;
use App\Controllers\forms;

/**
 * @var RouteCollection $routes
 */

$routes->get('main', [main::class, 'main']);


$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('forms', [forms::class, 'index']); 
$routes->get('forms/new', [forms::class, 'new']); 
$routes->post('forms', [forms::class, 'create']);          
$routes->get('forms/(:segment)', [forms::class, 'show']);

$routes->get('photos', [photos::class, 'photos']);  

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);