<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+US+Trad+Guides&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="../style/style.css">
</head>


<body class="bodylogin">
    <h1 class="h1login">Página de Login</h1>


    <?php
        if (isset($_SESSION['error'])) {
            ?>
                <p style="color:red"><?= $_SESSION['error'] ?></p>
            <?php
        }
        unset($_SESSION['error']);
    ?>

    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <input type="submit" value="Entrar" class="entrarbon">
        <a  href="formCadUsuario.php" class="clink">criar conta</a>
    </form>
   
    <h6 class="h6ema">feito por Emanuel ;D</h6>
</body>
</html>