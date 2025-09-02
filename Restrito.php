<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require "menu.php";
?>

<h2>Área Restrita</h2>
<p>Bem-vindo, <?php echo $_SESSION['login']; ?>!</p>
