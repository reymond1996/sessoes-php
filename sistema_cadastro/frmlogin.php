<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>

<body>
    <form action="op_login.php" method="POST">
        <label>Usuario</label><br>
        <input type="text" name="txt_usuario" maxlength="50"><br>
        <label>Senha</label><br>
        <input type="text" name="txt_senha" maxlength="50"><br>

        <input type="submit" name="logar" value="Logar">
    </form>
</body>

</html>