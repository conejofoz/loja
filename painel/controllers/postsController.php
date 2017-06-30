<?php
class postsController extends controller {
    public function index(){
        echo "Lista de postagens ";
    }
    
    public function ver($nome, $sobrenome){
        echo "Nome nome: ".$nome." ".$sobrenome;
    }
}