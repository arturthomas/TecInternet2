<?php

class Router {
    
    protected $uri;
    protected $controller;
    protected $action;
    protected $params;

    public function getUri() {
        return $this->uri;
    }
    public function getController() {
        return $this->controller;
    }
    public function getAction() {
        return $this->action;
    }
    public function getParams() {
        return $this->params;
    }

    public function __construct($uri)
    {
        print_r('Ok!!! Chegou no Router: ' . $uri);
    }

}