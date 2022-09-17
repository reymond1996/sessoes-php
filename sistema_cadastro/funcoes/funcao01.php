<?php
header('content-type:text/html;charset=utf-8');
/*Toda função possui um nome, seguido de um par de parenteses 
e dentro do parenteses pode possuir parametros ou argumentos e sempre
começa pelo comando function
sitaxe function x(arg1,arg2....)
Local da criação e aonde ela pode ser chamada
*/
function triplo($numero)
{
    $valor = $numero * 7;
    return $valor;
}

/*chamada da funcao */

$x = 5;
echo "o valor passada da variavel $x é " . triplo($x);
