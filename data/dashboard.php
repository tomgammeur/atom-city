<?php
require "design.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <?php    
    echo "Bienvenue " . htmlspecialchars($username);
echo "<br>";
    echo "Nom d'utilisateur :  " . htmlspecialchars($login);
echo "<br>";

    echo "Photo de profil : " . htmlspecialchars($pfp);
echo "<br>";
?>

<a href="../index.php" style="text-decoration:none">< Acceuil</a>
</body>
</html>
