<?php
    if (isset($_GET['id']))
        $id = $_GET['id'];

    try {
        if (isset($id)) {
            $stmt = $conn->prepare('SELECT * FROM clientes WHERE id = :IDCliente');
            $stmt->bindParam(':IDCliente', $id, PDO::PARAM_INT);
        } else {
            $stmt = $conn->prepare('SELECT * FROM clientes');
        }
        //$stmt->execute(array('id' => $id));
        $stmt->execute();
    
        //while($row = $stmt->fetch()) {
        //while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            //print_r($row);
        //}

        $result = $stmt->fetchAll();
?>