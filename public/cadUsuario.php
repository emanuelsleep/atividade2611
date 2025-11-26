<?php


require "../app/functions.php";

$dataFile = "../app/users.json";
$usuarios = loadJson($dataFile);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nomenovo = htmlspecialchars(trim($_POST['username'])) ?? '';
    $senha = htmlspecialchars(trim($_POST['password'])) ?? '';

    if (!isset($nomenovo) || !isset($senha) || empty($nomenovo)  || empty($senha)) {
        $_SESSION['erro'] = "Preencha todos os campos";
        header("Location: formCadUsuario.php");
        exit;
    }

    $novoUsu = [
        "username" => $nomenovo,
        "password" => password_hash($senha, PASSWORD_DEFAULT)
    ];

    $usuarios[] = $novoUsu;
    saveJson($dataFile, $usuarios);
    header("Location: formLogin.php");
    exit;
}