<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Codec Pro";
            background: radial-gradient(circle at top, #1a1a40, #0d0d1a);
            color: white;
        }
		
        header {
    font-family: "Codec Pro";
    display: flex;
    justify-content: center;   /* centre tout horizontalement */
    align-items: center;       /* centre verticalement */
    gap: 30px;                 /* petit espace entre logo et menu */
    padding: 15px 0;
    background: linear-gradient(90deg, #ff0080, #7928ca, #00c6ff);
}
        

        header h1 {
    font-family: "Codec Pro";
            font-size: 3.5rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: white;
            text-shadow: 
                0 0 5px #fff,
                0 0 15px #ff00ff,
                0 0 25px #00ffff;
        }
        nav {
            margin-top: 25px;
    font-family: "Codec Pro";

        }

nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
    padding: 0;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
    transition: 0.3s;
        
}

nav ul li a:hover {
    text-shadow: 0 0 10px white;
}

        nav ul li a:hover {
    font-family: "Codec Pro";
            background: rgba(255,255,255,0.2);
            box-shadow: 0 0 10px #fff;
            transform: scale(1.1);
        }
        main {
            padding: 60px 20px;
            text-align: center;
    font-family: "Codec Pro";
        }

        main h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00ffff;
    font-family: "Codec Pro";

        }
        .image-arrondie {
    width: 400px;
    border-radius: 40px;
}

        main p {
    font-family: "Codec Pro";
            font-size: 1.2rem;
            max-width: 700px;
            margin: auto;
            line-height: 1.6;
        }

        footer {
    font-family: "Codec Pro";
            background: #111;
            text-align: center;
            padding: 100px;
            margin-top: 60px;
            font-size: 0.9rem;
            color: #aaa;
        }


.social-box {
    background: linear-gradient(90deg, #01448dff, #2b006bff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}
.social-box-metro {
    background: linear-gradient(90deg, #bb0000ff, #4d0100ff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.social-box-metro img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box-metro img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}

.social-box-bus {
    background: linear-gradient(90deg, #0009b9ff, #210057ff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.social-box-bus img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box-bus img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}

.social-box-vlille {
    background: linear-gradient(90deg, #6c0093ff, #390152ff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.social-box-vlille img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box-vlille img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}
.social-box img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}
.logo {
    width: 100px;
    height: auto;
    transition: 0.3s ease;
}

.logo:hover {
    width: 110px;
    height: auto;
    transition: 0.6s ease;
    transform: scale(1.1);

}
.logo:active {
    width: 100px;
    height: auto;
    transition: 0.3s ease;
    transform: scale(1.1);
}
.logo:target {
    width: 50px;
    height: auto;
    transition: 0.3s ease;
    transform: scale(1.1);
}


.logo-small {
    width: 60px;
}
.events-container {
    display: flex;
    gap: 40px;
    justify-content: center;
    flex-wrap: wrap;
}


.event-card {

    width: 320px;
    background: #1a1a2e;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    transition: 0.3s ease;
    margin: 40px auto;
}

.event-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.6);
}

.event-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.event-content {
    padding: 20px;
    color: white;
}

.event-content h3 {
    margin: 0 0 10px 0;
    font-size: 1.4rem;
}

.event-date {
    font-size: 0.9rem;
    color: #00ffff;
    margin-bottom: 10px;
}

.event-description {
    font-size: 0.95rem;
    line-height: 1.4;
}
h1 {
    display: inline-block; /* 👈 important */
    background: linear-gradient(45deg, #5700aeff, #5c0053ff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
}
.search-bar{
    font-family: "Codec Pro";
    display:block;
    margin:20px auto 40px auto;
    padding:10px 15px;
    width:200px;
    border-radius:20px;
    border:none;
    font-size:16px;
    text-align:center;
}
    </style>
</head>

<body>

<header>
                <img src="icons/logopng.png" onclick="location.href='index.php'" alt="Logo Atom City" class="logo">

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="salle.php">La salle</a></li>
            <li><a href="jeux.php">Jeux</a></li>
            <li><a href="prix.php"> Tarifs</a></li>
            <li><a href="events.php">Événements</a></li>
            <li><a href="galerie.php">Galerie</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
</body>
</html>