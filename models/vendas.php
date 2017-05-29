<?php

class vendas extends Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function setVendas($uid, $endereco, $valor, $pg, $prods){
        
        /*
         1 => Aguardando pgto.
         2 => Aprovado
         3 => Cancelado

        */
        
        $status = '1';
        $link = '';
        
        if($pg == '1'){
            $status = '2';
            $link = BASE_URL."/carrinho/obrigado";
            
        } else {
            //integração com pagamentos
        }
        
        $sql = "INSERT INTO vendas (id_usuario, endereco, valor, forma_pg, status_pg, pg_link) VALUES('$uid','$endereco','$valor','$pg','$status','$link')";
        $this->db->query($sql);
        $id_venda = $this->db->lastInsertId();
        
        foreach ($prods as $prod){
           $sql = "INSERT INTO vendas_produtos (id_venda, id_produto, quantidade) VALUES('$id_venda','".($prod['id'])."','1')";
           $this->db->query($sql);
        }
        
        unset($_SESSION['carrinho']);
        return $link;
    }
}