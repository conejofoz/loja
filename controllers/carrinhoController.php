<?php
class carrinhoController extends controller{
    public function __construct() {
        parent::__construct();
    }
    
    
    public function index(){
       $dados = array();
       $prods = array();
       if(isset($_SESSION['carrinho'])){
           $prods = $_SESSION['carrinho'];
       }
       
       $sql = "SELECT * FROM produtos WHERE id IN (".  implode(',',$prods).")";
       $sql = $this->db->query($sql);
       if($sql->rowCount() > 0){
           $dados['produtos'] = $sql->fetchAll();
       }
       
       $this->loadTemplate("carrinho", $dados);
    }
    
    
    public function add($id){
        if(!empty($id)){
            if(!isset($_SESSION['carrinho'])){
                $_SESSION['carrinho'] = array();
            }
            $_SESSION['carrinho'][] = $id;
            header("Location: ".BASE_URL."/carrinho");
        }
    }
}
?>