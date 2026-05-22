<?php
session_start();
require "design.php";
$mysqli = new mysqli("localhost", "root", "", "atomcity");
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $check = "SELECT * FROM user WHERE login = '$login'";
    $result = $mysqli->query($check);
    if ($result && $result->num_rows > 0) {
        $message = "Ce login existe déjà.";
    } else {

        $sql = "INSERT INTO user (username, login, password)
                VALUES ('$username', '$login', '$password')";
        if ($mysqli->query($sql)) { 
            $message = "Compte créé avec succès !";
        } else {
            $message = "Erreur lors de l'inscription.";

        }
    }
}
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
<body>
<a href="../index.php" style="text-decoration:none">< Acceuil</a>
    <div class="container">
<div class="box">
    <h2>Inscription</h2>
    <form method="POST">
        Nom d'utilisateur : <input type="text" name="username" class="custom-input" required><br><br><br>
        Login : <input type="text" name="login" class="custom-input"  required><br><br><br>
        Mot de passe : <input type="password" name="password" class="custom-input" required><br><br><br>
        <button type="submit" class="gradient-button">Créer un compte</button><br><br><br>
    </form>
    </div>
    <p><?php echo $message; ?></p>
    <center>
        <p>Vous avez déja un compte ?</p>
    <a href="testsql.php" class="gradient-button">Connexion</a>
    </center>
</div>
</body>
</html>