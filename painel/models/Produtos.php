<?php
class Produtos extends Model{
    public function getProdutos($offset, $limit){
        $array = array();
        $sql = "SELECT *, (SELECT titulo FROM categorias WHERE categorias.id= produtos.id_categoria) as categoria FROM produtos LIMIT $offset, $limit";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
    
    public function getTotalProdutos(){
        $q = 0;
        $sql = "SELECT COUNT(*) as totalProdutos FROM produtos";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $q = $sql->fetch();
            $q = $q['totalProdutos'];
        }
        return $q;
    }
}