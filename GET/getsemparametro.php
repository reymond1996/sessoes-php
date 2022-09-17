<?php
/*var_dump($_GET);//matriz ou array
{nomeCampo=Valor1&NomeCampo2=Valor2}*/

/* sem passados de valores na url, somente o arquivo .php */
header('content-type:text/html;charset=utf-8');

// $acao = $_GET['acao'];
// $id = $_GET['id'];

/* Estrutura de controle Switch 
Sintaxe SWITCH (condicao):

                default: caso algumas da opções não satisfeita
                #code
                endswitch;
*/
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} else {
    $acao = null;
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


switch ($acao):
    case 'excluir':
        echo 'excluir um registro do banco ' . $id;
        break;
    default:
        echo 'Nenhuma das acaos foram selecionadas';
        break;
endswitch;

/*url paramentro (?acao=excluir&id=5)* /


