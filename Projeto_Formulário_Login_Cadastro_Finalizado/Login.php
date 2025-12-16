<?php

session_start();
include("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tela de login</title>
  <link rel="stylesheet" href="style.css">
</head>

<form action="LoginCheck.php" method="post">

  <form action="LoginCheck.php" method="post">
    <span class="login" align="center">
      <h1>Faça Login</h1>
    </span>


    <div class="bloco_1">
      <label for="usuario">Nome de usuario :</label>
      <input type="text" name="usuario" placeholder="usuario"><br>

      <label for="password">Senha do usuario :</label>
      <input type="password" name="senha" placeholder="Senha">


      <input class="imputSubimit" type="submit" name="submit" value="Realizar Login ">
      <input class="botaoVoltar" type="button" value="Voltar" onclick="window.location.href='index.php'">
  </form>
  </div>