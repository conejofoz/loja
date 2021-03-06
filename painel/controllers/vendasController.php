<?php
class vendasController extends controller {
    
    

    public function __construct() {
        parent::__construct();
    }
    
    

    public function index() {
            $dados = array(
                'vendas' => array()
            );
            
            $vendas = new vendas();
            $dados['vendas'] = $vendas->getVendas();
            
            $this->loadTemplate('vendas', $dados);
    }
    
    
    
    public function ver($id){
        if(!empty($id)){
            $dados = array(
                'venda' => array(),
                'produtos' => array()
            );
            
            $vendas = new vendas();
            
            $dados['venda'] = $vendas->getVenda($id);
            $dados['produtos'] = $vendas->getProdutos($id);
            
            $this->loadTemplate('vendas_ver', $dados);
        }
    }
    
    
  
}

?>
