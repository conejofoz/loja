<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produtos
 *
 * @author conejo
 */
class produtos extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function listar($qt = 0){
        $sql = "SELECT * FROM produtos ORDER BY RAND()";
        if($qt > 0){
            $sql .= "LIMIT ".$qt;
        }
        
        $sql = $this->db->query($sql);
        
        $produtos = array();
        
        if($sql->rowCount() >0 ){
            $produtos = $sql->fetchAll();
        }
        
        return $produtos;
    }
    
    public function listar_categoria($cat){
        $sql = "SELECT * FROM produtos WHERE id_categoria = '$cat'";
        $sql = $this->db->query($sql);
        $produtos = array();
        if($sql->rowCount() > 0){
            $produtos = $sql->fetchAll();
        }
        return $produtos;
    }
    
}
