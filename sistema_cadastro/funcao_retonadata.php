<?php
function retorna_data()
{
    $agora = time();
    $data = getdate($agora);


    //echo $data;
    if ($data["wday"] == 0) {
        echo "Domingo";
    } elseif ($data["wday"] == 1) {
        echo "Segunda-feira";
    } elseif ($data["wday"] == 2) {
        echo "Terça-feira";
    } elseif ($data["wday"] == 3) {
        echo "Quarta-feira";
    } elseif ($data["wday"] == 4) {
        echo "Quinta-feira";
    } elseif ($data["wday"] == 5) {
        echo "Sexta-feira";
    } elseif ($data["wday"] == 6) {
        echo "Sabado";
    }
    //mes
    if ($data["mon"] == 1) {
        echo $mes = "Janeiro";
    } elseif ($data["mon"] == 2) {
        echo $mes = "Fevereiro";
    } elseif ($data["mon"] == 3) {
        echo $mes = "Março";
    } elseif ($data["mon"] == 4) {
        echo $mes = "Abril";
    } elseif ($data["mon"] == 5) {
        echo $mes = "Maio";
    } elseif ($data["mon"] == 6) {
        echo $mes = "Junho";
    } elseif ($data["mon"] == 7) {
        echo $mes = "Julho";
    } elseif ($data["mon"] == 8) {
        echo $mes = "Agosto";
    } elseif ($data["mon"] == 9) {
        echo $mes = "Setembro";
    } elseif ($data["mon"] == 10) {
        echo $mes = "Outubro";
    } elseif ($data["mon"] == 11) {
        echo $mes = "Novembro";
    } elseif ($data["mon"] == 12) {
        echo $mes = "Dezembro";
    }

    /* escrever o array */

    $data_atual = $data["mday"] . ", de " . $mes . " de " . $data["year"];
    return $data_atual;
}

$hoje = retorna_data();

echo $hoje;
