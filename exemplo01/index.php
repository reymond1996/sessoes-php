<?php
//ativar a sessão, usando a funcao sessao_start()
session_start();
//ajustando a padronização em relação aos acentos
header('content-type:text/html;charset=utf-8');
//criar a sessao
$_SESSION['carrinho'] = "5940";
$_SESSION['codigo_produto'] = "003";

echo "O número do seu carrinho é " . $_SESSION['carrinho'] . "<br>";
echo "O código do seu produto " . $_SESSION['codigo_produto'];
