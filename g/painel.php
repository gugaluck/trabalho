<html>
<head>

<?php 
session_start();
echo $_SESSION['logado'];
if  (($_SESSION['logado']) == '0')
{
	$_SESSION['logado'] = '2';
	  header('location:index.php');
  }
 
?>

<title>Trabalho</title>
</head>
 
<body>
	<table width="600" height="400">
		<tr>
			<td height="60" colspan="1"> Teste
				<?php
					echo'test';
				?>
			</td>
		</tr>
	</table>
</body>
</html>