<?php
class categoriasController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
            $dados = array();
            $cat = new categorias();
            $dados['categorias'] = $cat->getCategorias();
            $this->loadTemplate('categorias', $dados);
    }
    
    
    public function add(){
        $dados = array();
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            $cat = new categorias();
            $cat->addCategoria($_POST['titulo']);
            header("Location: " . BASE_URL . "/painel/categorias");
        }
        $this->loadTemplate('categorias_add', $dados);
    }
    public function edit($id){
        $dados = array();
        
        $cat = new categorias();
        
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            
            $cat->editCategoria($_POST['titulo'], $id);
            header("Location: " . BASE_URL . "/painel/categorias");
        }
        
        $dados['categoria'] = $cat->getCategoria($id);
        $this->loadTemplate('categorias_edit', $dados);
    }
    
    
    public function remove($id){
        if(!empty($id)){
            $cat = new categorias();
            $cat->removeCategoria($id);
            header("Location: " . BASE_URL . "/painel/categorias");
        }
    }
}

?>
