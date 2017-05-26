<?php

class carrinhoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $prods = array();
        if (isset($_SESSION['carrinho'])) {
            $prods = $_SESSION['carrinho'];
        }
        if (count($prods)) {
            $sql = "SELECT * FROM produtos WHERE id IN (" . implode(',', $prods) . ")";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $dados['produtos'] = $sql->fetchAll();
            }

            $this->loadTemplate("carrinho", $dados);
        } else {
            header("Location: " . BASE_URL . "/");
        }
    }

    public function add($id) {
        if (!empty($id)) {
            if (!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = array();
            }
            $_SESSION['carrinho'][] = $id;
            header("Location: " . BASE_URL . "/carrinho");
        }
    }

    public function del($id) {
        if (!empty($id)) {
            foreach ($_SESSION['carrinho'] as $cchave => $cvalor) {
                if ($id == $cvalor) {
                    unset($_SESSION['carrinho'][$cchave]);
                }
            }
            header("Location: " . BASE_URL . "/carrinho");
        }
    }

}

?>