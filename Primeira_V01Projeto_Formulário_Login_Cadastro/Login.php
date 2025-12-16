<?php

session_start();
include("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>
  <style>
    .btn {
      margin: 10px;
    }
  </style>
</head>

<body>
  <style>
    .login {

      font-family: tahoma;
      margin-top: 4px;

    }
  </style>

  <form action="LoginCheck.php" method="post">
    <span class="login" align="center">Faça Login</span>

    <div class="padding-bottom--24">
      <label for="usuario">Nome de usuario</label>
      <input type="text" name="usuario" placeholder="usuario">
    </div>

    <div class="padding-bottom--24">
      <label for="password">Senha do usuario</label>
      <input type="password" name="senha" placeholder="Senha">
    </div>

    <input class="imputSubimit" type="submit" name="submit" value="Realizar Login "></div>
  </form>