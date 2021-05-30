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
}