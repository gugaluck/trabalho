<?php
session_start();
include('conexao.php');
 
if(empty($_POST['nome']) || empty($_POST['sobrenome'])) {
	header('Location: index.php');
	exit();
}
 
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
$query = "select * from funcionarios where (nome = '{$nome}') and (sobrenome = '{$sobrenome}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: painel.php');
	exit();

} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>