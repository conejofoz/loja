<?php

class produtoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function ver($id = '') {
        //$paginanaoencontrada = BASE_URL . "/naoencontrado";
        if (!empty($id)) {
            $dados = array();
            $id = addslashes($id);
            $sql = "SELECT * FROM produtos WHERE id = '$id'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $dados['produto'] = $sql->fetch();
                $this->loadTemplate('produto', $dados);
            } else {
                header("Location: ".BASE_URL."/naoencontrado");
            }
        } else {
            //header("Location: " . $paginanaoencontrada);
            header("Location: ".BASE_URL."/naoencontrado");
        }
    }

}

?>