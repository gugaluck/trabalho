<?php
session_start();
include('conexao.php');


$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = ("SELECT * FROM usuario WHERE login='login' AND senha='senha'") or die("login ou senha incorretos");
$con = new PDO("mysql:host=localhost;dbname=northwind", "root", ""); 
echo($sql);

$rows = $sql->fetchAll();
print_r($rows);

      $active = $sql['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched login and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("login");
         $_SESSION['login_user'] = login;
         
         header("location: painel.php");
      }else {
         $error = "login ou senha incorretos";
      }

    if (($login) and ($senha)<=0){
      echo"teste";
    }else{
      setcookie("login",$login);
      echo"teste2";
      header("Location:painel.php");
    }

?>