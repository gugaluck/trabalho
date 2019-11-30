<html>
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="menu.css"> 
    </head>
    <button>
        <a href="menu.php">Voltar para o menu</a>
    </button>    

</html>
<?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Nome Companhia</th><th>Nome Contato</th>
          <th>Titulo Contato</th><th>Endereço</th><th>Cidade</th><th>Regiao</th>
          <th>CEP</th><th>Pais</th><th>Telefone</th><th>Fax</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    $username = 'root';
    $password = '';
    $banco = 'northwind';

    try {
        $conn = new PDO('mysql:host=localhost;dbname='.$banco, 
        $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM fornecedores");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    ?>
</html>