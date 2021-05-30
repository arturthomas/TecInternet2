<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

// Autoload - Carrega todos os arquivos
function load ($class_name) {
    // Carrega os arquivos da pasta lib - DB, App, Controller, Model...
    $lib_path = ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
    // Lista todos os Models da aplicação
    $model_path = ROOT.DS.'models'.DS.strtolower($class_name).'.php';
    // Lista todos os Controllers da aplicação
    $controllers_path = ROOT.DS.'controllers'.DS.str_replace('controller', '', strtolower($class_name)).'.controller.php';

    if (file_exists($lib_path)) {
        require_once($lib_path);
    } elseif (file_exists($controllers_path)) {
        require_once($controllers_path);
    } elseif (file_exists($model_path)) {
        require_once($model_path);
    } else {
        throw new Exception('Error ' . $class_name);
    }
}

spl_autoload_register('load');

require_once(ROOT.DS.'config'.DS.'config.php');