<?php
include_once 'conexao.php';
//verificar as variaveis de ambiente


if (isset($_POST['Inserir'])) {
    //funcao que controla as violações do SQL INJECTION
    //mysqli_escape_string(), ela precisa de dois parametros
    //um deles e a variavel de conexao e o outro name do post

    $nome = $_POST['txt_nome'];
    $email = $_POST['txt_email'];
    $login = mysqli_escape_string($conn, $_POST['txt_login']);
    $senha = mysqli_escape_string($conn, $_POST['txt_senha']);

    // echo "Nome " . $nome . "<br>";
    // echo "Email " . $email . "<br>";
    // echo "Usuario " . $usuario . "<br>";
    // echo "Senha " . $senha . "<br>";
    /*criptografar a senha*/
    $senha = md5($senha);

    $sql = "INSERT INTO usuario(id,nome,email,login,senha) 
    VALUES(null,'$nome','$email','$login','$senha')";

    //verificar a condicao da gravacao
    if (mysqli_query($conn, $sql)) {
        $_SESSION['achou'] = 1;
        // header('location:frm_cadastrar.php');
    } else {
        // echo "Error ao inserir o registro!!!";
        $_SESSION['achou'] = 0;
        echo "Erro no registro!!!";
    }
}
