<?php

class CartoesController extends Controller {


    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Cartao();
    }

    // É chamado quando o usuário acessa. 
    // Rota: usuario
    // Action: index
    public function index () {
        $this->data['cartoes'] = $this->model->getList();
    }

}