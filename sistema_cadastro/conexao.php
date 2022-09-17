<?php
$servidor = 'localhost';
$username = 'root';
$senha    = 'deskserve';
$banco    = 'bd_cadastro';

$conn = mysqli_connect($servidor, $username, $senha, $banco);

if (!$conn) {

    echo "Erro na conexao!!!!";
}
