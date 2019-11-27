<?php
session_start();
include('conexao.php');


$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
$result->execute();
$contar = $result->rowCount();

// se não encontrou resultado, é porque o usuário não existe
if($contar < 1){
    $errorMsg = "Usuário não existe.";
}else{        
    // verifica se senha  estão corretos, pois na consulta foi verificado apenas o usuário
    if($senha != $dadosBd["senha"]){
        $errorMsg = "Senha incorreta.";
    }
}

// se $errorMsg estiver vazio é porque não deu erro, então pode criar a sessão normalmente
if(empty($errorMsg)){
    $_SESSION['usuario'] = $dadosBd['usuario'];
    header("Location: painel.php");
    exit;
}else{
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
        <script>
            alert('".$errorMsg."');
        </script>
    ";
}


?>