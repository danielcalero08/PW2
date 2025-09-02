<?php
session_start();
?>
<ul>
    <li><a href="index.php">Início</a></li>
    <li><a href="restrito.php">Restrito</a></li>
    <?php if (isset($_SESSION['login'])): ?>
        <li><a href="sair.php">Sair</a></li>
    <?php endif; ?>
</ul>
<hr>
