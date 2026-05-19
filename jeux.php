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
    <script>
const searchBar = document.getElementById("searchBar");

searchBar.addEventListener("keyup", function () {
    const value = this.value.toLowerCase();
    const cards = document.querySelectorAll(".event-card");

    cards.forEach(card => {
        const title = card.querySelector("h3").textContent.toLowerCase();

        if (title.includes(value)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>
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
    <img src="https://static.wikia.nocookie.net/darkstalkers/images/e/e4/Vampire_Savior_Lord_of_Vampire_Character_Select_Screen.png/revision/latest?cb=20110622014038" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Vampire Savior/Darkstalker 3</h3>
                        <p class="event-description">
VS Fighting, Capcom, 1997
 
        </p>
    </div>
    </div>
    </div>
            <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/mortalkombat.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Mortal Kombat</h3>
                        <p class="event-description">
VS Fighting, Midway, 1992
        </p>
    </div>
    </div>
    </div>

<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/metalslug3.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Metal Slug 3</h3>
                        <p class="event-description">
Run’n Gun, SNK, 2000
        </p>
    </div>
    </div>
    </div>

<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/fzero-ax.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>F-Zero AX</h3>
                        <p class="event-description">
Course, Sega/Nintendo, 2003
        </p>
    </div>
    </div>
    </div>

    <div class="event-card">
    <img src="https://i.ytimg.com/vi/uZXmhdoF2hk/maxresdefault.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Motocross Go!</h3>
                        <p class="event-description">
        </p>
    </div>
    </div>
    </div>

    <div class="event-card">
    <img src="https://atomcity.fr/images/jeux/pang.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Pang</h3>
                        <p class="event-description">
        Shoot’em Up, Mitchell, 1989
        </p>
    </div>
    </div>
    </div>


<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/thenextspace.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>The Next Space</h3>
                        <p class="event-description">
Shoot’em Up, SNK, 1989
        </p>
    </div>
    </div>
    </div>

<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/thunderforceac.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Thunder Force AC</h3>
                        <p class="event-description">
Shoot’em Up, Technosoft/Sega, 1990
        </p>
    </div>
    </div>
    </div>

    <div class="event-card">
    <img src="https://atomcity.fr/images/jeux/virtuanba.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Virtua NBA</h3>
                        <p class="event-description">
Shoot’em Up, Technosoft/Sega, 1990
        </p>
    </div>
    </div>
    </div>

<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/vasara.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Vasara</h3>
                        <p class="event-description">
Shoot’em Up, Visco Corporation, 2000
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

    <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/asterix.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Asterix</h3>
                        <p class="event-description">
Beat’em Up, Konami, 1992
        </p>
    </div>
    </div>
    </div>

    <div class="events-container">
<div class="event-card">
    <img src="https://www.arcadeclub.co.uk/cdn/game-library/hatsune-miku-project-diva-arcade/1280/hatsune-miku-project-diva-arcade_screenshot_001_@1280.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Project Diva Arcade</h3>
                        <p class="event-description">
Rythme, Sega
        </p>
    </div>
    </div>
    </div>

        <div class="events-container">
<div class="event-card">
    <img src="https://atomcity.fr/images/jeux/bombermanworld.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Bomberman World</h3>
                        <p class="event-description">
Puzzle, Irem, 1992
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
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRORfmEc6PjKA-oE5gqOHfykzD_4wwf8bBN-A&s" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Sonic Wings 3</h3>
                        <p class="event-description">
Shoot’em Up, Video System, 1995
        </p>
    </div>
    </div>    
</div>

    <div class="event-card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2PQJWn6EvK1TRlqgqa77Xw3KuUpNQqqsXDg&s" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Zuapapa</h3>
                        <p class="event-description">
Plateforme, Face, 2001
        </p>
    </div>
    </div>    
</div>

    <div class="event-card">
    <img src="https://atomcity.fr/images/jeux/virtuaracing.jpg" alt="Jeu" class="image-arrondie">
    <div class="event-content">
        <h3>Virtua Racing</h3>
                        <p class="event-description">
Course, Sega, 1992
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
        </div>   
    </div>


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
