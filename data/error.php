<!DOCTYPE html>
<html lang="en">
<head>
    <title>Erreur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0; /* Commence invisible */
                transform: translateY(-20px); /* Déplace vers le haut */
            }
            to {
                opacity: 1; /* Devient visible */
                transform: translateY(0); /* Retourne à la position d'origine */
            }
        }
        .error {
            font-family: "Codec Pro";
            color: #ffffff;
            background-color: #ff0015;
            border: 1px solid #f5c6cb;
            padding: 15px 0;
            margin: 24px;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }
    </style>
</head>
<body>
    <div class="alert error">
        Erreur: L'identifiant ou/et le mot de passe est incorrect.
    </div>
    <a href="testsql.php">< Réessayer</a>
    <style>
        a {
    background: linear-gradient(45deg, #5700aeff, #5c0053ff); /* Dégradé de couleur */
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.5s;
    opacity: 0;
    animation: fadeIn 0.5s forwards;
}

a:hover {
    background: linear-gradient(45deg, #6200c4ff, #a009a0ff); 
    transition: all 0.5s ;
    padding: 10px 25px;

}
a:active {
    background: linear-gradient(45deg, #30005fff, #160023ff); 
    transition: all 0.5s ;
    padding: 10px 25px;

}
    </style>
</body>
</html>
