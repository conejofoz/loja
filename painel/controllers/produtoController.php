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
            
            $produtos = new produtos();
            $dados['produto'] = $produtos->get_produto($id);
            if(is_array($dados['produto']) && count($dados['produto'])){
                $this->loadTemplate('produto', $dados);
            } else {
                header("Location: ".BASE_URL."/naoencontrado");
            }
        } else {
            header("Location: ".BASE_URL."/naoencontrado");
        }
    }

}

?>