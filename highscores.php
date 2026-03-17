<?php
require "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Scores - Atom City</title>

</head>
<body>
    <main>
    <h2>Meilleurs scores</h2>    
    <nav style="display:flex; justify-content:center;">
    <ul style="display:flex; list-style:none; gap:20px; padding:0;">
        <li><a href="jeux.php">Les jeux</a></li>
        <li><a href="highscores.php">High scores</a></li>
    </ul>
</nav>
    <input type="text" id="searchBar" placeholder="Rechercher un jeu..." class="search-bar">

</main>
<script>
const searchBar = document.getElementById("searchBar");

searchBar.addEventListener("keyup", function() {

    let searchValue = searchBar.value.toLowerCase();
    let games = document.querySelectorAll(".event-card");

    games.forEach(function(game){

        let title = game.querySelector("h3").textContent.toLowerCase();

        if(title.includes(searchValue)){
            game.style.display = "block";
        } else {
            game.style.display = "none";
        }

    });

});
</script>
</body>
</html>
<?php
require "footer.php"
?>
