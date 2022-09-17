<?php
session_start();

if ($_SESSION['logado']){
    echo "Usuario logado";


}else {
    echo "Página Restrita";
}
