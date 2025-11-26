<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: public/formLogin.php");
    exit;
}

require "../app/functions.php";

$dataFile = "../app/data.json";
$itens = loadJson($dataFile);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = htmlspecialchars(trim($_POST['nome'])) ?? '';
    $descricao = htmlspecialchars(trim($_POST['descricao'])) ?? '';

    if (!isset($nome) || !isset($descricao) || empty($nome)  || empty($descricao)) {
        $_SESSION['erro'] = "Preencha todos os campos";
        header("Location: formCadastro.php");
        exit;
    }

    $novo = [
        "nome" => $nome,
        "descricao" => $descricao
    ];

    $itens[] = $novo;
    saveJson($dataFile, $itens);
    header("Location: listar.php");
    exit;
}