<?php
session_start();
require "menu.php";
?>

<h2>Página Inicial</h2>

<?php if (!isset($_SESSION['login'])): ?>
    <form action="logar.php" method="post">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
<?php endif; ?>
