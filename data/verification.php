<?php
session_start();
require "design.php";
$mysqli = new mysqli("localhost", "root", "", "atomcity");
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
$pfp = $_POST['pfp'] ?? '';
$id = $_POST['id'] ?? '';
$username = $_POST['username'] ?? '';
$sql = "SELECT * FROM user 
        WHERE login = '$login' 
        AND password = '$password'";
$result = $mysqli->query($sql);
if ($result && $result->num_rows == 0) {
    require "error.php";
} else if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc(); 
    $username = $user['username'];  
    require "dashboard.php";
} else {
    echo "Erreur dans la requête.";
}
$mysqli->close();
?>
