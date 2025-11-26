<?php
session_start();

if (!$_SESSION['logado']) {
    header("Location: public/formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itens</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="fcbody">
   

    <h1 class="h1cad">Cadastro de Itens</h1>

    <form action="cadastro.php" method="post" onsubmit="return validar()">
        <input type="text" name="nome" placeholder="Nome do Item"><br><br>
        <input type="text" name="descricao" placeholder="Descrição"><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <a href="../index.php"class="inic">Início</a><br>
    <a href="listar.php" class="list">Listar Itens</a>

    <script src="js/validacao.js"></script>
</body>
</html>