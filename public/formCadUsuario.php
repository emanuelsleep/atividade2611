<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="formcadusu">

    <h1 class="h1fcusu">Cadastro de usuário</h1>

    <form action="cadUsuario.php" method="post" onsubmit="return validar()">
        <input type="text" name="username" placeholder="nome de usuario"><br><br>
        <input type="text" name="password" placeholder="senha"><br><br>
        <input type="submit" value="Cadastrar" class="cadput">
    </form>
    <a href="../index.php"class="inic">Início</a><br>
    <script src="js/validacao.js"></script>
</body>
</html>