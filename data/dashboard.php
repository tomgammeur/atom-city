<?php
require "design.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Atom City</title>
</head>
<body>
<a href="../index.php" style="text-decoration:none">< Acceuil</a>
<br>
<?php
echo "<div class='account-container'>";

echo "<h1>Bienvenue, " . htmlspecialchars($username) . "</h1>";

echo "<div class='account-card'>";
echo "<p><strong>Nom d'utilisateur :</strong> " . htmlspecialchars($login) . "</p>";
echo "<p><strong>ID</strong> " . htmlspecialchars($id) . "</p>";
echo "<p><strong>Photo de profil :</strong><br>";
?>
<img src="photos/pp.png" class='pfp' alt='avatar'></img>

<?php
echo "</div>";

echo "<div class='account-card'>";
echo "<h2>Meilleurs scores</h2>";
echo "<ul class='scores'>
        <li>Crazy Taxi - 0 pts (à venir)</li>
        <li>Pop’n Pop - 0 pts (à venir)</li>
        <li>Time Crisis - 0 pts (à venir)</li>
      </ul>";
      echo "<p>Aucun évenement n'est encore annoncé.</p>";
echo "</div>";

echo "<div class='account-card'>";
echo "<h2>Contact & informations</h2>";
echo "<p>Besoin d’aide ou signaler un problème ?</p>";
echo "<p>Contactez-nous :</p>";
echo "<ul>
        <li>Email : atomcitylille@gmail.com</li>
        <li>Discord : https://discord.gg/mk5Gr3t</li>
      </ul>";
echo "</div>";

echo "</div>";
?>

</body>
</html>
