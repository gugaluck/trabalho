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
</html>