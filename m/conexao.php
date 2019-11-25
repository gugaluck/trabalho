<?php

$banco = 'mysql:host=localhost;dbname=trabalho';
$usuario = 'root';
$senha = '';

try{
    $conn = new PDO($banco, $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (PDOException $e){

    echo 'Erro: '. $e->getMessage();
}

