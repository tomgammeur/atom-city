<!DOCTYPE html>
<html lang="en">
<head>
    <title>Erreur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1; 
                transform: translateY(0);
            }
        }
        .error {
            font-family: "Codec Pro";
            color: #ffffff;
            background-color: #ff0015;
            padding: 15px 0;
            margin: 24px;
            border-radius: 50px;
            justify-content: center;
            align-items: center;
            opacity: 0;
            animation: fadeIn 0.5s forwards;
                text-decoration: none;

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
    background: linear-gradient(45deg, #5700aeff, #5c0053ff); 
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.5s;
    opacity: 0;
    animation: fadeIn 0.5s forwards;
        text-decoration: none;

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
