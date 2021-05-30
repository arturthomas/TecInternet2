<?php

Config::set('site_name', 'NullBank');

Config::set('routes', array(
    'default' => '',
    'usuario' => 'usuario',
));

Config::set('default_route', 'default');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
// Dados de acesso ao banco de dados
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'nullbank');