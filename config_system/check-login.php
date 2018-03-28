<?php

include 'conexao.php';
$pdo = conectar();

if(!isLoggedIn()){
    header("Location: ../indexLogin.php");
}

