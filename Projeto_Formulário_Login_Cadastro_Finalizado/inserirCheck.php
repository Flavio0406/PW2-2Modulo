<?php 
  
    include("conexao.php");

    $nome = $_POST['nome'];
    $dt_nasc = $_POST['dt_nasc'];
    $usuario= $_POST['usuario'];
    $senha= $_POST['senha'];
    

    $inserir = $pdo->prepare("insert into usuarios (nome,dt_nasc,usuario,senha)
                     values ('$nome', '$dt_nasc', '$usuario', '$senha')");
    $inserir->execute();

    header("location:Login.php");


?>