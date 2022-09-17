<?php
include_once 'conexao.php';
session_start();

if (isset($_POST['logar'])) {
    $txt_usuario = $_POST['txt_usuario'];
    $txt_senha = $_POST['txt_senha'];

    $txt_senha = md5($txt_senha);

    $sql = "SELECT * FROM usuario  where login ='$txt_usuario' and senha='$txt_senha'";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        // echo "Registro achado";
        $_SESSION['logado'] = 1;
        header('location:restrito.php');
    } else {
        // echo "Registro nao achado";
        $_SESSION['logado'] = 0;
        header('location:frmlogin.php');
    }
}
