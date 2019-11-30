<html>
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="menu.css"> 
    </head>
    <button>
        <a href="menu.php">Voltar para o menu</a>
    </button>
    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Nome do Produto</th><th>Id Fornecedor</th><th>Id Categoria</th>
          <th>Quantidade por unidade</th><th>Preço</th><th>UN no estoque</th><th>UN em Ordem</th>
          <th>Nivel de Reposicao</th><th>Descontinuado</th></tr>";

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
        $stmt = $conn->prepare("SELECT * FROM produtos");
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