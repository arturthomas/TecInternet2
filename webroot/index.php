<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname((dirname(__FILE__))));

require_once(ROOT.DS.'lib'.DS.'init.php');

$router = new Router($_SERVER['REQUEST_URI']);