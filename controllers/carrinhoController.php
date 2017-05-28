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
            $produtos = new produtos();
            $dados['produtos'] = $produtos->get_produtos_by_id($prods);
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
    
    
    public function finalizar(){
        $dados = array(
            'pagamentos' => array(),
            'total' => 0
        );
        
        $p = new pagamentos();
        $dados['pagamentos'] = $p->getPagamentos();
        
        $prods = array();
        if (isset($_SESSION['carrinho'])) {
            $prods = $_SESSION['carrinho'];
        }
        if (count($prods)) {
            $produtos = new produtos();
            $dados['produtos'] = $produtos->get_produtos_by_id($prods);
            
            foreach ($dados['produtos'] as $prod){
                $dados['total'] += $prod['preco'];
            }
        } 
        
        $this->loadTemplate("finalizar_compra", $dados); 
    }

}

?>