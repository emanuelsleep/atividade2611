<?php
session_start();

if (!$_SESSION["logado"]) {
    header("Location: public/formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="bodyindex">
    <h2 class="h2body">Bem-vindo, Admin!</h2>
    <a href="public/formCadastro.php" class='links'>Cadastrar Itens</a><br>
    <a href="public/listar.php" class='links'>Listar Itens</a><br>
    <a href="public/logout.php" class='links'>Sair</a>
</body>
</html>