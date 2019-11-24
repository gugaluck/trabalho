<?php

define('localhost',' 127.0.0.1');
define('nome', 'root');
define('senha', '');
define('db','northwind');

$conexao = @mysqli_connect('localhost', 'nome', 'senha', 'db');

?>