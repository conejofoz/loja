<?php

class Admins extends Model{
    public function isLogged(){
        if(isset($_SESSION['admlogin']) && !empty($_SESSION['admlogin'])){
            return true;
        } else {
            return false;
        }
        
    }
}