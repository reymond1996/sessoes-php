<?php

session_start();

if ($_SESSION['logado'] == true) {
    header('location:principal.php');

    session_destroy();
}
