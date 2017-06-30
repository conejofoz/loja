<?php
class homeController extends controller {
    
    public function __construct() {
        parent::__construct();
        
        $adm = new admins();
        if($adm->isLogged() == false){
            header("Location: ".BASE_URL."/painel/login");
        }
    }

    public function index() {
        $dados = array();
                       
        $this->loadTemplate('home', $dados);
    }
    
    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }

}
