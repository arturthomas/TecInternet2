<?php 

// Model de Cartões - Podemos pensar que cada tabela terá um Model
class Cartao extends Model {

    // Lista os cartões pelo id do usuario - id_usuario
    public function getByUsuarioId ($id) {

        $this->db->escape($id);
        $sql = "SELECT * FROM cartao WHERE id_usuario = '$id'";
        $result = $this->db->query($sql);
        return $result;
    }
}