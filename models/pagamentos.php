<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pagamentos
 *
 * @author conejo
 */
class pagamentos extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getPagamentos() {
        $array = array();
        try {
            $sql = "SELECT * FROM pagamentos";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
        } catch (PDOException $e) {
            echo "Erro ao consultar pagamentos".$e->getMessage();
        }
        return $array;
    }

}
