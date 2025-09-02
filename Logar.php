<?php
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($email === "teste@teste.com" && $senha === "teste123") {
    $_SESSION['login'] = $email;
    header("Location: restrito.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
