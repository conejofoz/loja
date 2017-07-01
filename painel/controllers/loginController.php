<?php
class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $dados = array(
            'aviso' => ''
        );
        if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
            $usuario_b = addslashes($_POST['usuario']);
            $senha = addslashes($_POST['senha']);
            $usuario = new usuario();
            if($usuario->isExiste($usuario_b, $senha)){
                $_SESSION['admlogin'] = $usuario->getId($usuario_b);
                header("Location: ".BASE_URL."/painel");
            } else {
                $dados['aviso'] = "Usuario e/ou Senha incorretos";
            }
        }
        $this->loadTemplate('login', $dados);
    }
    
    public function logout(){
        unset($_SESSION['admlogin']);
        header("Location: ".BASE_URL."/painel/login");
    }
}

?>
