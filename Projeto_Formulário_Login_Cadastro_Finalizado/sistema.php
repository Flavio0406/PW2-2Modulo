<?php

session_start();

if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('location: Login.php');

    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

}

$logado = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <?php
  echo '<link rel="stylesheet" href="style.css"';
  ?>
</head>

<body>
    <h1>Conexão Realizada Com Sucesso !!</h1>

    <center><a href="Sair.php"><input class="sair" type="submit" name="sair" value="Sair"></a></center>
</body>

</html>