<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trabalho PHP</title>
	<link rel="stylesheet" type="text/css" href="index.css"> 
</head>
<body>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>
	<div class="login">
		<form class="form-logar">       
			<h2 class="form-logar-heading">Login</h2>
			<input type="text" class="form-campo" name="nome" placeholder="Digite seu usuário" required="" autofocus="" />
			<input type="password" class="form-campo" name="senha" placeholder="Digite sua senha" required=""/>      
			<label class="checkbox">
			</label>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>   
    	</form>
	</div>
</body>


</html>