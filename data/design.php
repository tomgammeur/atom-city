<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2{
    display: flex;
    font-family: "Codec Pro";
    background-color: blue;
    padding: 15px 0;
    margin: 24px;
    border-radius: 40px;
    color: white;
    justify-content: center;
    align-items: center;
}
        body {
    font-family: "Codec Pro";
    justify-content: center;
    align-items: center;
        }

.gradient-button {
    background: linear-gradient(45deg, #5700aeff, #5c0053ff); /* Dégradé de couleur */
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 40px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.5s;
}

.gradient-button:hover {
    background: linear-gradient(45deg, #6200c4ff, #a009a0ff); 
    transition: all 0.5s ;
    padding: 10px 25px;

}
.gradient-button:active {
    background: linear-gradient(45deg, #30005fff, #160023ff); 
    transition: all 0.5s ;
    padding: 10px 25px;

}
.account-container {
    max-width: 900px;
    margin: 40px auto;
    font-family: 'Codec Pro';
    color: white;
}

.account-container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #ff66c4;
}

.account-card {
    background: #111;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
    border: 1px solid rgba(255,255,255,0.05);
}

.pfp {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    border: 2px solid #ff0080;
    margin-top: 10px;
}

.scores {
    list-style: none;
    padding: 0;
}

.scores li {
    padding: 8px;
    margin: 5px 0;
    background: rgba(255,255,255,0.05);
    border-left: 3px solid #ff0080;
    border-radius: 6px;
}
    </style>
</head>
<body>
</body>
</html>