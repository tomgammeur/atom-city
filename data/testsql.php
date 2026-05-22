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
<br>
<div class="container">
<form method="POST" action="verification.php">
    Login : <input type="text" name="login" class="custom-input" required><br><br><br>
    Mot de passe : <input type="password" class="custom-input" name="password" required><br><br><br>
    <input type="submit" value="Se connecter" class="gradient-button">
</form>
<br><br><br>
</div>
<center>
    <p>Pas encore de compte ?</p>
    <a href="inscription.php" class="gradient-button" style="">
    S'inscrire
    </a>
</center>
</body>
</html>
