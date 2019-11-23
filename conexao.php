<?php

define('localhost',' 127.0.0.1');
define('nome', 'root');
define('senha', '123');
define('db','trabalho');

$conexao = @mysqli_connect('localhost', 'nome', 'senha', 'db');

?>