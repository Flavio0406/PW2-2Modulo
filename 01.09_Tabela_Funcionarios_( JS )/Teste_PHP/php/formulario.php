<?php

if(isset($_POST['submit'])){


  include_once('config.php');

  $Nome = $_POST['nome'];
  $Funcao = $_POST['funcao'];
  $Salario = $_POST['salario'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,funcao,salario) 
  VALUES ('$Nome','$Funcao','$Salario')");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <main>
  <div class="container">
    <div class="header">
      <span>Cadastro de Funcionários</span>
      <button onclick="openModal()" id="new">Incluir</button>
    </div>

    <div class="divTable">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Função</th>
            <th>Salário</th>
            <th class="acao">Editar</th>
            <th class="acao">Excluir</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>

    <div class="modal-container">
      <div class="modal">
        <form action="formulario.php" method="POST">
          <label for="m-nome">Nome</label>
          <input id="m-nome" type="text" name="nome" required />

          <label for="m-funcao">Função</label>
          <input id="m-funcao" type="text" name="funcao" required />

          <label for="m-salario">Salário</label>
          <input id="m-salario" type="number" name="salario" required />

          <button type="submit" name="submit" id="btnSalvar">Salvar</button>
        </form>
      </div>
    </div>
  </div>

  <main>
</body>

</html>
