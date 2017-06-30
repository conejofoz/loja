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

    public function isExiste($usuario, $senha = '') {
        if (!empty($senha)) {
            $senha = md5($senha);
            $sql = "SELECT * FROM admins WHERE usuario='$usuario' AND senha = '$senha'";
        } else {
            $sql = "SELECT * FROM admins WHERE usuario='$usuario'";
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
    
    
    public function getId($usuario){
        $id = 0;
        $sql = "SELECT * FROM admins WHERE usuario = '$usuario'";
        $sql = $this->db->query($sql);
        if($sql->rowCount()>0){
            $sql = $sql->fetch();
            $id = $sql['id'];
        }
        return $id;
    }

}
