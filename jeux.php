<?php
require "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux - Atom City</title>

</head>
<body>
    <main>
    <h2>Nos jeux</h2>
    <nav style="display:flex; justify-content:center;">
    <ul style="display:flex; list-style:none; gap:20px; padding:0;">
        <li><a href="jeux.php">Les jeux</a></li>
        <li><a href="highscores.php">High scores</a></li>
    </ul>
</nav>
<br>

    <input type="text" id="searchBar" placeholder="Rechercher un jeu..." class="search-bar">
<!--
    TEMPLATE 
    <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/pacman.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Nom du jeu</h3>
                        <p class="event-description">
Plateforme, Editeur, Année de sortie
        </p>
    </div>
    </div>
    </div>
-->
        <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/lupin3.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Lupin III The Shooting</h3>
                        <p class="event-description">
Rail Shooter, WOW Entertainment/Sega, 2001
        </p>
    </div>
    </div>
    </div>

        <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/streetfighter33.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Street Fighter 3 Third Strike</h3>
                        <p class="event-description">
VS Fighting, Capcom, 1999
        </p>
    </div>
    </div>
    </div>

    <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/tetrisgrandmaster.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Tetris: The Grand Master</h3>
                        <p class="event-description">
Puzzle, Arika, 1998
        </p>
    </div>
    </div>
    </div>

    <div class="events-container">
<div class="event-card">
    <img src="icons/maimai.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Mai Mai Finale</h3>
                        <p class="event-description">
Rythme, SEGA, 2018 
        </p>
    </div>
    </div>
    </div>

    <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/mkgp2.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Mario Kart Arcade GP 2</h3>
                        <p class="event-description">
Course, Namco/Nintendo, 2007
        </p>
    </div>
    </div>
    </div>

    <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/guiltygearx.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Guilty Gear X</h3>
                        <p class="event-description">
VS Fighting, Arc System Works, 2000
        </p>
    </div>
    </div>
    </div>

    <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/pacman.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Pac-Man</h3>
                        <p class="event-description">
Plateforme, Namco/Midway, 1980
        </p>
    </div>
    </div>
    </div>

    <div class="event-card">
    <img src="https://atomcity.fr/images/jeux/popnpop.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Pop'n Pop</h3>
                        <p class="event-description">
Puzzle, Taito, 1998
        </p>
    </div>
    </div>    
</div>


    <div class="event-card">
    <img src="https://atomcity.fr/images/jeux/puzzlebobble.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Puzzle Bobble</h3>
                        <p class="event-description">
Puzzle, Taito, 1994
        </p>
    </div>
        </div>    </div>


    <div class="event-card">
    <img src="https://atomcity.fr/images/jeux/skullgirls2.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Skullgirls 2nd Encore</h3>
                <p class="event-description">
VS Fighting, Revenge Labs/Konami, 2015
        </p>
    </div>
        </div>    </div>


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
