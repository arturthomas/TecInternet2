<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname((dirname(__FILE__))));
define('VIEWS_PATH', ROOT.DS.'views');


require_once(ROOT.DS.'lib'.DS.'init.php');

// $router = new Router($_SERVER['REQUEST_URI']);

// echo '<pre>';
// print_r('ROUTE: ' . $router->getRoute().PHP_EOL);
// print_r('CONTROLLER: ' . $router->getController().PHP_EOL);
// print_r('ACTION: ' . $router->getMethodPrefix().$router->getAction().PHP_EOL);
// echo 'PARAMS: ';
// print_r($router->getParams());

App::run($_SERVER['REQUEST_URI']);