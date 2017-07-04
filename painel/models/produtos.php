<?php
class Produtos extends Model{
    
    public function getProduto($id){
       $array = array();
        $sql = "SELECT * FROM produtos WHERE id = '$id'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array; 
    }
    
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
    
    
    public function inserir($nome, $categoria, $preco, $quantidade, $md5imagem){
        $sql = "INSERT INTO produtos(nome, id_categoria, preco, quantidade, imagem) VALUES('$nome','$categoria','$preco','$quantidade','$md5imagem')";
        //echo $sql."<br/>"; //se tiver html o header location nao funciona
        $sql = $this->db->query($sql);
    }
    
    
    
    public function updateProduto($id, $nome, $descricao, $categoria, $preco, $quantidade){
        $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', id_categoria = '$categoria', preco = '$preco', quantidade = '$quantidade' WHERE id = '$id'";
        $sql = $this->db->query($sql);
    }
    
    
    public function updateImagem($id, $imagem){
        $sql = "UPDATE produtos SET imagem = '$imagem' WHERE id = '$id'";
        $sql = $this->db->query($sql);
    }
}