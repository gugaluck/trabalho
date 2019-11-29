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
            $stmt = $conn->prepare('SELECT * FROM transportadoras WHERE id = :IDTransportadora');
            $stmt->bindParam(':IDTransportadora', $id, PDO::PARAM_INT);
        } else {
            $stmt = $conn->prepare('SELECT * FROM transportadoras');
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
                    <td><?=$row['IDTransportadora']?></td>
                    <td><?=$row['NomeConpanhia']?></td>
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
</table>
<?php
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }