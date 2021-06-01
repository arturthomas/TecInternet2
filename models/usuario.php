<?php

// Model de Usuario - Podemos pensar que cada tabela terá um Model
class Usuario extends Model {
    
    public function getList () {
        $sql = "SELECT * FROM usuario";

        return $this->db->query($sql);
    }

    public function getById ($id) {
        $id = $this->db->escape($id);
        $sql = "SELECT * FROM usuario where id = '$id' LIMIT 1;";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function updateById($id, $data) {
        $id = $this->db->escape($id);

        $nome = $this->db->escape($data['nome']);
        $tipo = $this->db->escape($data['tipo']);
        $nascimento = $this->db->escape($data['nascimento']);
        $documento = $this->db->escape($data['documento']);

        $sql = "UPDATE usuario SET nome = '$nome', data_nascimento = '$nascimento', tipo = '$tipo', cpf_cnpj = '$documento' WHERE id = '$id';";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert($data) {
        $nome = $this->db->escape($data['nome']);
        $tipo = $this->db->escape($data['tipo']);
        $nascimento = $this->db->escape($data['nascimento']);
        $documento = $this->db->escape($data['documento']);

        $sql = "INSERT INTO usuario (nome, tipo, data_nascimento, cpf_cnpj) VALUES ('$nome', '$tipo', '$nascimento', '$documento');";
        var_dump($sql);
        $result = $this->db->query($sql);
        return $result;
    }
}