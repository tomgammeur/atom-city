<?php
require "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Atom City</title>

</head>
<body>
    <main>
    <h2>Contactez-nous</h2>
<p>Ecrivez-nous par mail</p>
<p><a id="antispam2" onclick="javascript:antispam('antispam2'); return false;">Cliquez-ici pour afficher le mail</a><br>
<p> et/ou suivez-nous sur les réseaux sociaux (voir en bas de page). </p><br>
<p>Pour les ventes de machines d'arcade, contactez plutôt <a href="https://www.facebook.com/VortexArcadeFR/">Vortex Arcade</a>.<p>

<script type="text/javascript">
function antispam(id) {
var span = document.getElementById(id);
var sub = "lto:"; var presub = "mai";
var at = "@";
var midsub = "atomcitylille";
var endsub = "gmail.com";
span.setAttribute('href', presub + sub + midsub + at + endsub);
span.removeAttribute('onclick');
span.innerHTML = midsub + at + endsub;
}
</script>
    </p>
<br>
<br>
<br>
<br>
<br>
    <p>Cliquez sur la carte pour ouvrir la navigation.</p><br>
<p class="align-center"><a href="https://www.openstreetmap.org/#map=17/50.62429/3.06543" title="Voir sur Openstreetmap" target="_blank"><img src="https://atomcity.fr/images/localisation.jpg" alt="carte des alentours" class="image-arrondie"/></a></p>

</main>
</body>
</html>
<?php
require "footer.php"
?>
