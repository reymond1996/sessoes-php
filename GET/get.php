<?php
/*var_dump($_GET);//matriz ou array
{nomeCampo=Valor1&NomeCampo2=Valor2}*/

/* passados valores na url (?acao=excluir&id=5)*/
header('content-type:text/html;charset=utf-8');

$acao = $_GET['acao'];
$id = $_GET['id'];

echo "Tipo da acao " . $acao . "<br>";
echo "Número do id " . $id;
//