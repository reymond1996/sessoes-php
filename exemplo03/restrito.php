<?php
session_start();

if ($_SESSION['logou'] == 1) {
    echo "Bem Vindo á página restrita!!!" . "<br>";
    echo "<a href='logout.php'>Sair</a>";
} else {
    header('location:index.php');
}

//destruir as sessoes
