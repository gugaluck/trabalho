<html>
<head>
    <meta charset="utf-8">
    <title>Menu</title>
	<link rel="stylesheet" type="text/css" href="menu.css"> 
</head>

<nav>
<table>
    <?php

    session_start();
    if  (($_SESSION['logado']) == '0'){
        $_SESSION['logado'] = '2';
        header('location:index.php');
    }
        $menu = ['CLIENTES', 'FORNECEDORES', 'TERRITORIO', 'TRANSPORTADORA', 'REGIAO', 'PRODUTOS'];
        $links = ['clientes.php','fornecedores.php','territorio.php','transportadora.php','regiao.php','produtos.php'];
        print "<ul>";

        for($c=0;$c<6;$c++)
        print "<a href='$links[$c]'><li>$menu[$c]</li></a>"


    
    ?>
</table>
</nav>
</html>