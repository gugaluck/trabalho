<?php

define('localhost',' 127.0.0.1');
define('nome', 'root');
define('senha', '');
define('db','northwind');

ini_set('display_errors', true);
error_reporting(E_ALL);

$conexao = @mysqli_connect('localhost', 'nome', 'senha', 'db');

?>