<?php

class vendas extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function setVendas($uid, $endereco, $valor, $pg, $prods) {

        /*
          1 => Aguardando pgto.
          2 => Aprovado
          3 => Cancelado

         */

        $status = '1';
        $link = '';

        $sql = "INSERT INTO vendas (id_usuario, endereco, valor, forma_pg, status_pg, pg_link) VALUES('$uid','$endereco','$valor','$pg','$status','$link')";
        $this->db->query($sql);
        $id_venda = $this->db->lastInsertId();

        if ($pg == '1') {
            $status = '2';
            $link = BASE_URL . "/carrinho/obrigado";

            $this->db->query("UPDATE vendas SET status_pg = '$status' WHERE id = '" . $id_venda . "'");
        } elseif ($pg == '2') {
            //Pagseguro
            require 'libraries/PagSeguroLibrary/PagSeguroLibrary.php';
            $paymentRequest = new PagSeguroPaymentRequest();
            foreach ($prods as $prod) {
                $paymentRequest->addItem($prod['id'], $prod['nome'], $prod['preco']);
            }

            $paymentRequest->setCurrency("BRL");
            $paymentRequest->setReference($id_venda);
            $paymentRequest->setRedirectURL(BASE_URL . "/carrinho/obrigado");
            $paymentRequest->addParameter("notificationURL", BASE_URL . "/carrinho/notificacao");

            try {
                $cred = PagSeguroConfig::getAccountCredentials();
                $link = $paymentRequest->register($cred);
                
            } catch (PagSeguroServiceException $e) {
                echo $e->getMessage();
            }
        }



        foreach ($prods as $prod) {
            $sql = "INSERT INTO vendas_produtos (id_venda, id_produto, quantidade) VALUES('$id_venda','" . ($prod['id']) . "','1')";
            $this->db->query($sql);
        }

        unset($_SESSION['carrinho']);
        return $link;
    }

}
