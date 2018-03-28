<?php

// Inclui arquivo de conexão
require 'conexao.php';
$pdo = conectar();
session_start();

// Pega dados do formulario Form-Login.php
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


// Executa verificação dos dados no BD
$query_login = "SELECT id, nome, usuario, email, avatar FROM usuarios WHERE email = :email AND senha = :senha";
$verificaLogin = $pdo->prepare($query_login);
$verificaLogin->bindValue(':email', $email);
$verificaLogin->bindValue(':senha', $senha);
$verificaLogin->execute();

$users = $verificaLogin->fetchAll(PDO::FETCH_ASSOC);

if(count($users) <= 0)
{
    $_SESSION['msg-valida-login'] = '<div class="alert alert-danger alert-dismissible erro-login" role="alert">'.
    '<strong>Dados incorretos!</strong><br /> E-mail e/ou senha inválidos'.
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'.
    '<span aria-hidden="true">&times;</span></button></div>';
    header('Location: ../indexLogin.php');
    exit;
}

// pega o primeiro usuario encontrado
$user = $users[0];
$_SESSION['isLoggedIn'] = true;
$_SESSION['id'] = $user['id'];
$_SESSION['user_usuario'] = $user['usuario'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_nome'] = $user['nome'];
$_SESSION['avatar'] = $user['avatar'];


header('Location: ../index.php');