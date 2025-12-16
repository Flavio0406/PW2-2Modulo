<?php
$host = 'localhost';
$username = "root";
$password = "";
$name = 'bdpw3';

$conexao = new mysqli($host,$username,$password, $name);


$pdo = new PDO('mysql:host=localhost;dbname=bdpw3', $username, $password);

?>

