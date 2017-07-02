<?php
class produtosController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
            $dados = array();
            $offset = 0;
            $limit = 3;
            
            if(isset($_GET['p']) && !empty($_GET['p'])){
                $p = addslashes($_GET['p']);
                $offset = ($limit *$p) - $limit;
            }
            
            $prod = new produtos();
            $dados['limit_produtos'] = $limit;
            $dados['total_produtos'] = $prod->getTotalProdutos();
            $dados['produtos'] = $prod->getProdutos($offset, $limit);
            $this->loadTemplate('produtos', $dados);
    }
    
    
    public function add(){
        $dados = array(
            'categorias' => array()
        );
        
        $cat = new categorias();
        $dados['categorias'] = $cat->getCategorias();
        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])){
            $nome = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $categoria = addslashes($_POST['categoria']);
            $preco = addslashes($_POST['preco']);
            $quantidade = addslashes($_POST['quantidade']);
            $imagem = $_FILES['imagem'];
            if(in_array($imagem['type'], array('image/jpeg', 'image/jpg', 'image/png'))){
                $extencao = 'jpg';
                if($imagem['type'] == 'image/png'){
                    $extencao = 'png';
                }
                $md5imagem = md5(time().rand(0, 9999)).'.'.$extencao;
                move_uploaded_file($imagem['tmp_name'], '../assets/images/prods/'.$md5imagem);
                
                $prod = new Produtos();
                $prod->inserir($nome, $categoria, $preco, $quantidade, $md5imagem);
                header("Location: " . BASE_URL . "/painel/produtos");
            }
        }
//            $cat = new categorias();
//            $cat->addCategoria($_POST['titulo']);
//            header("Location: " . BASE_URL . "/painel/categorias");
//        }
        $this->loadTemplate('produtos_add', $dados);
    }
    
    
   /* public function add(){
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
    }*/
}

?>
