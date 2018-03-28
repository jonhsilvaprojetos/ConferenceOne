<?php

function conectar() {

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php_pdo";

    try {
        $pdo = new PDO("mysql:host=$servidor;dbname=php_pdo", $user, $pass);
    } catch (PDOException $e) {
        var_dump($e);
    }
    return $pdo;
}

function isLoggedIn() {
    if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
        return false;
    }
    return true;
}
