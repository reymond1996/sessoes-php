<?php
include_once 'conexao.php';
include_once './funcoes/funcaoData.php';


// se o botao foi prcecionado
if (isset($_POST['Submit'])) {
    $data = databr($_POST['txt_data'], 1);
    //echo $data;


    //insert na tabela



    $result = mysqli_query($conn, "INSERT into info(id, dataCad) VALUES(null,'$data')");
    if ($result) {
        echo "Registro gravado com sucesso";
    } else {
        echo "Problema ao gravar registro";
    }
}
