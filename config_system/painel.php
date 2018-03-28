<?php

session_start();
require 'check-login.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Painel do usuário</title>
        <link rel="icon" type="image/ico" href="../imagens/favicon.ico">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/EstiloPainel.css">
    </head>
    <body>
        
        <div id="corpo">
            <div class="side-bar-lateral col-md-3">
                <div class="header-side-bar"></div>
                <div class="info-user">
                <?php 
                    if(!empty($_SESSION['avatar'])){
                ?>
                    <div class="avatar-user">
                    <img src="../membros/avatars/<?php echo $_SESSION['avatar']; ?>" width="63" height='63'/>
                    </div>
                <?php
                    }
                ?>
                
                <div class="name-user">
                <span class="bem-vindo-user">Bem-vindo,</span>
                <span class="nome-usuario">
                <?php 
                if(isset($_SESSION['user_usuario'])):
                    echo $_SESSION['user_usuario'];
                endif;
                ?>
                </span>
                </div>

                </div>
                <nav class="menu-painel">
                    <ul>
                        <li><a href="painel.php?p=index">Dashboard</a></li>
                        <li><a href="painel.php?p=edita_cadastro">Meu Perfil</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="painel.php?p=sair">Sair</a></li>
                    </ul>
                </nav>
                <div class="dev-by">Desenvolvido por<br /><a href="#" target="_blank">Agência Samá</a></div> <!-- desenvolvido por -->
                </div><!-- final div sidebar -->
            <div class="conteudo-principal-painel">
            <div class="container">
            <?php
                    $pagina = @$_GET['p'];
                    if(!empty($pagina)){
                    if($pagina == 'index'){require_once("../index-painel.php");}
                    if($pagina == 'contato'){require_once("form-contato.php");}
                    if($pagina == 'edita_cadastro'){require_once("../form-update-reg.php");}
                    if($pagina == 'sair'){require_once("logout.php");}
                    } else {
                        require_once("../index-painel.php");
                    }
                    ?>
            </div><!-- final div container - conteudo principal -->
            </div><!-- final div conteudo principal painel -->
        </div><!-- final div corpo -->
    
    
    <script src="../lib/jquery/jquery.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/js-painel.js"></script>
    </body>
</html>