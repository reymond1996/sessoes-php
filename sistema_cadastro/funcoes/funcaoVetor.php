<?php
/*
        Vetor, representar com apenas uma coluna clube[]
    */
function clubes()
{

    $clubes[] = "Grêmio";
    $clubes[] = "Palmeiras";
    $clubes[] = "Flamengo";
    $clubes[] = "Atletico Mineiro";
    $clubes[] = "Bahia";
    return $clubes;
}
/* chamada */

$nome = clubes();
for ($i = 0; $i < sizeof($nome); $i++) {
    echo "\$nome[$i] vale $nome[$i] <br>";
}
