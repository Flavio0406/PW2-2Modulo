<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Cadastro</title>
    <?php
    echo '<link rel="stylesheet" href="style.css"';
    ?>

  </head>

  <?php

  include("conexao.php");
  ?>

<body>



  <form action="inserirCheck.php" method="post">


    <span class="title" align="center"><br>
      <h1>Cadastre-se Aqui
    </span></h1><br>
    <form id="stripe-login">

      <div class="bloco">
        <br><label for="nome">Seu nome :</label>
        <input type="text" name="nome">

        <br><label for="dt_nasc">Data de Nascimento :</label>
        <input type="date" name="dt_nasc">

        <br><label for="usuario">Nome de usuario :</label>
        <input type="text" name="usuario">

        <br><label for="senha">Senha do usuario :</label>
        <input type="password" name="senha">

        <br><input type="submit" name="submit" class="btn btn-primary" value="Cadastrar ">
        <input class="botaoVoltar" type="button" value="Voltar" onclick="window.location.href='home.php'">

      </div>









      </div>
      </div>
      </div>
      </div>