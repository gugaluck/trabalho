<?php

    include ('conexao.php');

    if (isset($_GET['id']))
        $id = $_GET['id'];

    try {
        if (isset($id)) {
            $stmt = $conn->prepare('SELECT * FROM clientes WHERE id = :IDCliente');
            $stmt->bindParam(':IDCliente', $id, PDO::PARAM_INT);
        } else {
            $stmt = $conn->prepare('SELECT * FROM clientes  ');
        }

        $stmt->execute();
    

        $result = $stmt->fetchAll();
?>