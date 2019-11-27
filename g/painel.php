<html>
<head>

<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['login'];
?>

<title>Trabalho</title>
</head>
 
<body>
	<table width="600" height="400">
		<tr>
			<td height="60" colspan="1"> Teste
				<?php
					echo" test $logado";
				?>
			</td>
		</tr>
	</table>
</body>
</html>