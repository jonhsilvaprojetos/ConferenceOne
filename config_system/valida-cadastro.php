<?php

session_start();

include 'conexao.php';
$pdo = conectar();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$avatar = "default-avatar.png";

$query_cadastro = "INSERT INTO usuarios (nome, usuario, email, senha, avatar) VALUES (:nome, :usuario, :email, :senha, :avatar)";
$cadastraUsuario = $pdo->prepare($query_cadastro);
$cadastraUsuario->bindValue(":nome", $nome);
$cadastraUsuario->bindValue(":usuario", $usuario);
$cadastraUsuario->bindValue(":email", $email);
$cadastraUsuario->bindValue(":senha", $senha);
$cadastraUsuario->bindValue(":avatar", $avatar);


$query_valida_cadastro = "SELECT * FROM usuarios WHERE email=?";
$validaCadastro = $pdo->prepare($query_valida_cadastro);
$validaCadastro->execute(array($email));

if ($validaCadastro->rowCount() == 0):
    $cadastraUsuario->execute();
    if ($pdo->lastInsertId()):
        $_SESSION['msg-reg'] = '<div class="alert alert-success alert-dismissible email-cadastrado" role="alert">'.
        '<strong>Cadastro realizado!</strong> Obrigado :)'.
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'.
        '<span aria-hidden="true">&times;</span></button></div>';
        header('Location: ../indexLogin.php');
    else:
        $_SESSION['msg-reg'] = '<div class="alert alert-danger alert-dismissible email-cadastrado" role="alert">'.
        '<strong>Houve um erro!</strong> Tente mais tarde.'.
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'.
        '<span aria-hidden="true">&times;</span></button></div>';
        header('Location: ../indexLogin.php');
    endif;
else:
    $_SESSION['msg-valida-email'] = '<div class="alert alert-warning alert-dismissible email-cadastrado" role="alert">'.
    '<strong>Atenção!</strong> E-mail já cadastrado.<br /><a href="indexLogin.php">Efetuar Login</a>'.
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'.
    '<span aria-hidden="true">&times;</span></button></div>';
    header('Location: ../indexLogin.php');
endif;