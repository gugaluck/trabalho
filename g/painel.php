<html>
<head>

<?php 
session_start();
if  (($_SESSION['logado']) == '0'){
	$_SESSION['logado'] = '2';
	  header('location:index.php');
}
 
?>

<title>Trabalho</title>
</head>
 
<body>
	<table width="600" height="400">
		<h2>Login feito com sucesso!</h2>
	</table>
</body>
<<<<<<< HEAD

<form method="POST" action="menu.php">       
			<button class="btn btn-lg btn-primary btn-block" type="submit">CLIQUE AQUI PARA ACESSAR O MENU!</button>   
    	</form>
	</div>
</html>
=======
</html>
>>>>>>> master
