<?php

class usuario extends Model {
    
    public function __construct() {
        parent::__construct();
    }

    private $name;

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }

    public function isExiste($email, $senha = '') {
        if (!empty($senha)) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha = '$senha'";
        } else {
            $sql = "SELECT * FROM usuarios WHERE email='$email'";
        }
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    public function criar($nome, $email, $senha){
        $senha = md5($senha);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome','$email','$senha') ";
        $this->db->query($sql);
        return $this->db->lastInsertId();
    }
    
    
    public function getId($email){
        $id = 0;
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);
        if($sql->rowCount()>0){
            $sql = $sql->fetch();
            $id = $sql['id'];
        }
        return $id;
    }

}
