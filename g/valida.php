<?php
session_start();
include('conexao.php');


$login = $_POST['login'];
<<<<<<< HEAD
$senha = md5($_POST['senha']);
=======
$senha = $_POST['senha'];
>>>>>>> master
$sql = ("SELECT * FROM usuario WHERE login='$login' AND senha='$senha'") or die("login ou senha incorretos");
$pdo = new PDO("mysql:host=localhost;dbname=northwind", "root", ""); 

$_SESSION['logado'] = '0';

if($stmt = $pdo->prepare($sql)){
  $stmt->bindParam(':utilizador', $param_username, PDO::PARAM_STR);

  if($stmt->execute())
      if($stmt->rowCount() == 1)
          if($row = $stmt->fetch())
                $_SESSION['logado'] = '1';
<<<<<<< HEAD
      } 
      header('location: painel.php');          
?>
=======
      }
      header('location: painel.php');          
?>
>>>>>>> master
