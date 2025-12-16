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
  <link rel="stylesheet" href="../css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="../js/Script.js"></script>
</head>

<body>
  <main>
  <div class="container">
    <div class="header">
      <span>Cadastro de Funcionários</span>
      
    </div>

    <div class="divTable">
      <table>
        <thead>
          <tr>
            <th>Digite suas informações</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>

    <div class="modal-container">
      <div class="modal">
        <form action="formulario.php" method="POST">
          <label for="m-nome">Nome:</label>
          <input id="m-nome" type="text" name="nome" placeholder="Digite seu nome" required />

          <label for="m-funcao">Função:</label>
          <input id="m-funcao" type="text" name="funcao" placeholder="Digite sua função" required />

          <label for="m-salario">Salário:</label>
          <input id="m-salario" type="number" name="salario" placeholder="Digite seu salario" required />

          <button type="submit" name="submit" id="btnSalvar">Salvar</button>
        </form>
      </div>
    </div>
  </div>
  <main>
</body>

</html>
