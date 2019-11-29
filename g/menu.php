<nav>
<?php

session_start();
if  (($_SESSION['logado']) == '0'){
	$_SESSION['logado'] = '2';
	  header('location:index.php');
}
 

    $menu = ['CLIENTES', 'FORNECEDORES', 'PESSOAS', 'TRANSPORTADORA', 'REGIAO', 'PRODUTOS'];
    $links = ['clientes.php','fornecedores.php','pessoas.php','transportadora.php','regiao.php','produtos.php'];

    print "<ul>";

    for($c=0;$c<6;$c++)
    print "<a href='$links[$c]'><li>$menu[$c]</li></a>"


   
?>
</nav>
