<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Estilizado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post" class="form">
        <div id="cad-top" class="card">
            <h2 class="titulo">Painel de Controle</h2>
            <p class="titulo">Gerencia Negocio</p>

            <div id="cad-grup" class="card-grup">
                <label for="">Usuario</label><br>
                <input type="text" name="usuario"><br>
                <label for="">Senha</label><br>
                <input type="password" name="senha" id="senha"><br>
                <label for="">
                    <input type="checkbox" onclick="MostrarOcultarSenha()">Lembre-me
                </label>
                <button type="submit">Acessar</button>
            </div>
        </div>

    </form>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>