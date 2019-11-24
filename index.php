<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trabalho PHP</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
		<h2>Login</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="valida.php">
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite seu usuário"><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite sua senha"><br><br>
			
			<input type="submit" name="btnLogin" value="Acessar">	
		</form>
</body>


</html>