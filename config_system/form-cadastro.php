<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulário de cadastro</title>
    </head>
    <body>
        <h3>Cadastro de usuário</h3>
        <form action="valida-cadastro.php" method="POST">

            <input type="text" name="nome" id="nome" placeholder="Nome" required/><br /><br />

            <input type="text" name="usuario" id="usuario" placeholder="Usuário" required /><br /><br />

            <input type="email" name="email" id="email" placeholder="E-mail" required /><br /><br />

            <input type="password" name="senha" id="senha" placeholder="Senha" required="" /><br /><br />

            <input type="submit" value="Cadastrar" />

        </form>

        <?php
        session_start();
        if (isset($_SESSION['msg-reg'])) {
            echo $_SESSION['msg-reg'];
            unset($_SESSION['msg-reg']);
        }
        if (isset($_SESSION['msg-valida-email'])) {
            echo $_SESSION['msg-valida-email'];
            unset($_SESSION['msg-valida-email']);
        }
        ?>

    </body>
</html>

