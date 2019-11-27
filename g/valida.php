<?php
session_start();
include('conexao.php');
 
if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
} 

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysql_connect("127.0.0.1", "root", "") or die
 ("Sem conexão");
$select = mysql_select_db("server") or die("não conectado");
$result = mysql_query("SELECT * FROM `USUARIO` 
WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:painel.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');
  }
?>