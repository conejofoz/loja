<?php
require 'environment.php';
global $config;
$config = array();
if(ENVIRONMENT == "development"){
    define("BASE_URL", "http://localhost/pzp/loja");
    $config['dbname'] = 'loja';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'conejo74';
} else {
    define("BASE_URL", "");
    $config['dbname'] = '';
    $config['host']   = '';
    $config['dbuser'] = 'infinitygroup';
    $config['dbpass'] = 'conejo24';
}
