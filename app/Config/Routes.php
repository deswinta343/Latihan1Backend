<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertPage');
$routes->post('insertproduct', 'ProductController::insertProduct');
$routes->get('products', 'ProductController::readProducts');
$routes->post('insertproduct', 'ProductController::insertProductORM');
$routes->get('edit-product/(:any)', 'ProductController::getProduct/$1');
$routes->post('update-product/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-product/(:any)', 'ProductController::deleteProduct/$1');
