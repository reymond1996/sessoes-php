<?php
header('content-type:text/html;charset=utf-8');
/*
    função strtoupper, converte tudo para maiusculo
            strtolower, convert tudo para minusculo
            str_replace, realizar a troca
     */

function Maiusculo($string)
{
    $string = strtoupper($string);
    $string = str_replace("á", "Á", $string);
    $string = str_replace("é", "É", $string);
    $string = str_replace("í", "Í", $string);
    $string = str_replace("ó", "Ó", $string);
    $string = str_replace("ú", "Ú", $string);

    // $string = str_replace("-", "/", $string);

    $string = str_replace("â", "Â", $string);
    $string = str_replace("ê", "Ê", $string);
    $string = str_replace("î", "Î", $string);
    $string = str_replace("ô", "Ô", $string);
    $string = str_replace("û", "Û", $string);

    $string = str_replace("a", "A", $string);
    $string = str_replace("e", "E", $string);
    $string = str_replace("i", "I", $string);
    $string = str_replace("o", "O", $string);
    $string = str_replace("u", "U", $string);


    return $string;
}

/* chamada */

$nome = "joão josé das coves";
$novo_nome = Maiusculo($nome);

echo "Nome do Raz.. " . $novo_nome;
