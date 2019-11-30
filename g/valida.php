<?php
session_start();
include('conexao.php');


$login = $_POST['login'];
<<<<<<< Updated upstream
$senha = $_POST['senha'];
=======
$senha = md5($_POST['senha']);
>>>>>>> Stashed changes
$sql = ("SELECT * FROM usuario WHERE login='$login' AND senha='$senha'") or die("login ou senha incorretos");
$pdo = new PDO("mysql:host=localhost;dbname=northwind", "root", ""); 

$_SESSION['logado'] = '0';

if($stmt = $pdo->prepare($sql)){
  $stmt->bindParam(':utilizador', $param_username, PDO::PARAM_STR);

  if($stmt->execute())
      if($stmt->rowCount() == 1)
          if($row = $stmt->fetch())
                $_SESSION['logado'] = '1';
<<<<<<< Updated upstream
      }
      header('location: menu.php');          
=======
      } 
      header('location: painel.php');          
>>>>>>> Stashed changes
?>
