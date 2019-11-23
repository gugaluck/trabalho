<?php

$banco = 'mysql:host=localhost;dbname=trabalho';
$usuario = 'root';
$senha = '';

try{
    $conn = new PDO($banco, $usuario, $senha);
}   catch (PDOException $e){

    echo 'Erro: '. $e->getMessage();
}

