<?php

class UsuariosController extends Controller {


    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Usuario();
        $this->cartoesModel = new Cartao();
    }

    // É chamado quando o usuário acessa. 
    // Rota: usuario
    // Action: index
    public function index () {
        $this->data['usuarios'] = $this->model->getList();
    }

    // É chamado quando o usuário acessa. 
    // Rota: usuario
    // Action: view
    public function view () {
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ) {
            $id = strtolower($params[0]);
            // Exertamos os dados em arrays
            // A key usuário tem os dados da tabela usuario (retornados pelo model usuario)
            $this->data['usuario'] = $this->model->getById($id);
            // A key cartoes tem os dados da tabela cartoes (retornados pelo model cartao)
            $this->data['cartoes'] = $this->cartoesModel->getByUsuarioId($id);
        }
    }

    public function edit () {
        $params = App::getRouter()->getParams();

        if ($_POST) {
            $id = $_POST['id'];
            if (isset($id)) {
                $data = $_POST;
                $this->model->updateById($id, $data);
            }
        }

        if ( isset($params[0]) ) {
            $id = strtolower($params[0]);
            $this->data['usuario'] = $this->model->getById($id);
            $this->data['cartoes'] = $this->cartoesModel->getByUsuarioId($id);
        }
    }

    public function add () {
        $params = App::getRouter()->getParams();

        if ($_POST) {
            $data = $_POST;
            $this->model->insert($data);
        }
    }


}