<?php

declare(strict_types = 1);

require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('contact', ['controller' => 'Contact', 'action' => 'index']);
//$router->add('{controller}');
$router->add('{controller}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);