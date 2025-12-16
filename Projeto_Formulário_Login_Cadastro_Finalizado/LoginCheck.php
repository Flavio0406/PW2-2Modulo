<?php


session_start();


if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {

    include_once('conexao.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];




    print_r('<br>');
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";
    print_r('<br>');
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {

        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: Login.php');
        exit();

    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
        exit();
    }



} else {
    header('Location: Login.php');
    exit();
}


?>