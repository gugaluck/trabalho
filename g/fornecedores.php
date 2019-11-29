<html>
<button>
    <a href="menu.php">IR PARA MENU</a>
</button>    

</html>
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
<table border="1" class="table table-striped">
<tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Ação</td>
</tr>
<?php
        if ( count($result) ) {
            foreach($result as $row) {
                ?>
                <tr>
                    <td><?=$row['IDFornecedor']?></td>
                    <td><?=$row['NomeContato']?></td>
                    <td>
                        <a href="?modulo=transportadoras&pagina=alterar&id=<?=$row['id']?>">Alterar</a>
                        <a href="?modulo=transportadoras&pagina=deletar&id=<?=$row['id']?>">Excluír</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "Nenhum resultado retornado.";
        }
?>
<table>
    <a href="menu.php">
    <button type="submit">IR PARA O MENU PRINCIPAL</button>
    </a>
    
</table> 
</table>
<?php
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }