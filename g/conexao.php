<?php

function getConnection(){
$username = 'root';
$password = '';
$banco = 'trabalho';

try {
    $conn = new PDO('mysql:host=mysql;dbname='.$banco, 
    $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: '. $e->getMessage();
}   

$teste = getConnection();
print_r($teste);

}