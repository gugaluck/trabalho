<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "teste";
}else{
	$_SESSION['msg'] = "teste";
	header("Location: valida.php");	
}
