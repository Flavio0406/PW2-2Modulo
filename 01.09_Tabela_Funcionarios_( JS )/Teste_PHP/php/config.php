<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_pw2';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao ->connect_erro){
    die ("Erro de conexão: " . $conexao->connect_error);

}


?>
