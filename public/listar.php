<?php
session_start();

if (!$_SESSION['logado']) {
    header("Location: public/formLogin.php");
    exit;
}

require "../app/functions.php";

$dataFile = "../app/data.json";
$itens = loadJson($dataFile);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Itens</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="listbody">
    

    <h1 class="h1list">Listagem de Itens Cadastrados</h1>

    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($itens as $item):
               ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td><?= $item['descricao'] ?></td>
                </tr>   
            <?php endforeach; ?>
        </tbody>
    </table>


    <a href="../index.php" class="iniclist">Início</a><br>
    <a href="formCadastro.php" class="cadlist">Cadastrar Item</a>
</body>
</html>