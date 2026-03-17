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
    padding: 0px 0;
    background: linear-gradient(90deg, #2c00beff, #5900b2ff);
    border-radius: 100px;
}
        .btn-portfolio {
    display: inline-block; /* 👈 important */
    background: linear-gradient(45deg, #590353ff, #7c058cff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
    font-weight: bold; /* texte en gras */
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
   
}

.btn-portfolio:hover {
    background: linear-gradient(45deg, #60045aff, #b307caff);
    transform: scale(1.05);
}
.btn-portfolio:active {
    background: linear-gradient(45deg, #60045aff, #b307caff);
    transform: scale(0.82);
}
        .btn-header {
    background: linear-gradient(45deg, #1e0575ff, #0e024dff);
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    transition: all 0.5s;
    font-weight: bold; /* texte en gras */
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
   
}

.btn-header:hover {
    background: linear-gradient(45deg, #2604a1ff, #0e024dff);
    transform: scale(1.05);
}
.btn-header:active {
    background: linear-gradient(45deg, #1e0575ff, #0e024dff);
    transform: scale(0.82);
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
            padding: 20px;
            margin-top: 60px;
            font-size: 0.9rem;
            color: #aaa;
            border-radius: 10px;

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
    cursor: pointer;

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
h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00ffff;
    font-family: "Codec Pro";

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
.academic {
    text-align: center;
    padding: 60px 20px;
}

.academic-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.academic-card {
    background: linear-gradient(135deg, #1a2a6c, #6a00ff);
    color: white;
    padding: 25px;
    border-radius: 20px;
    width: 220px;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.4);
    transition: transform 0.3s;
}

.academic-card:hover {
    transform: translateY(-8px);
}

.academic-card h3 {
    margin-bottom: 10px;
}

.academic-card span {
    font-size: 14px;
    opacity: 0.8;
}
    </style>
</head>

<body>

<header>
        <img src="photos/logotomg.png" onclick="location.href='index.php'" alt="TomGamme" class="logo">
    <nav>
        <ul>
            <li><a href="index.php" class="btn-header">Acceuil</a></li>
            <li><a href="projects.php" class="btn-header">Projets</a></li>
        </ul>
    </nav>
</header>
</body>
</html>