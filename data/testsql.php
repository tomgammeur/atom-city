<?php
require "design.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
</head>
<body>
<a href="../index.php" style="text-decoration:none">< Acceuil</a>
<br>

<h2>Connexion</h2>
<form method="POST" action="verification.php">
    Login : <input type="text" name="login" required><br><br>
    Mot de passe : <input type="password" name="password" required><br><br>
    <input type="submit" value="Se connecter" class="gradient-button">
</form>
</body>
</html>
