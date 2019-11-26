<?php

    include ('conexao.php');

    if (isset($_GET['id']))
        $id = $_GET['id'];

    try {
        if (isset($id)) {
            $stmt = $conn->prepare('SELECT * FROM fornecedores WHERE id = :IDFornecedor');
            $stmt->bindParam(':IDFornecedor', $id, PDO::PARAM_INT);
        } else {
            $stmt = $conn->prepare('SELECT * FROM fornecedores');
        }

        $stmt->execute();
    

        $result = $stmt->fetchAll();
?>