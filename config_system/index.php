<?php

session_start();
include 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Titulo</title>
    </head>
    <body>
        <?php
            if(isLoggedIn()){
                echo "Olá, ".$_SESSION['user_usuario'].". Acesse o <a href='painel.php'>Painel</a>";
            }else{
                echo "Bem vindo, visitante. <a href='form-login.php'>Entre</a> ou <a href='form-cadastro.php'>cadastre-se</a>";
            }
        ?>
    </body>
</html>

