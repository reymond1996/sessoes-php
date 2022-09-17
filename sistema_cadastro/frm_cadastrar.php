<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        fieldset {
            display: flex;
            width: 200px;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            padding: 20px;
            color: red;
            border-radius: 10px;


        }

        input[type="submit"] {
            justify-content: center;
        }
    </style>
    <title>Formulario de Cadastro</title>
</head>

<body>

    <fieldset>
        <form action="inserir.php" method="POST">
            <label>Nome</label><br>
            <input type="text" name="txt_nome"><br>
            <label>Email</label><br>
            <input type="text" name="txt_email"><br>
            <label>Usuário</label><br>
            <input type="text" name="txt_login"><br>
            <label>Senha</label><br>
            <input type="text" name="txt_senha"><br>
            <input type="submit" name="Inserir" value="Inserir">
        </form>
        <?php
        if ($_SESSION['achou'] = 1) {
            echo "Resgitro feito com sucesso";
        } elseif ($_SESSION['achou'] = 0) {
            echo "Erro";
        }
        ?>

    </fieldset>

</body>

</html>