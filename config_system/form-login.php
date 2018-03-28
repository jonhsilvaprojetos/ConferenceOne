<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Painel de Login</title>
    </head>
    <body>
        <h3>Sistema de Login</h3>
        <form action="valida-login.php" method="POST">

            <input type="email" name="email" id="email" placeholder="E-mail" required /><br /><br />

            <input type="password" name="senha" id="senha" placeholder="Senha" required="" /><br /><br />

            <input type="submit" value="Logar" />

        </form>

        <?php
        if (isset($_SESSION['msg-valida-login'])) {
            echo $_SESSION['msg-valida-login'];
            unset($_SESSION['msg-valida-login']);
        }
        ?>

    </body>
</html>