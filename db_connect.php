<?php
$servername = "localhost";
$username = "oussama";
$password = "#adminadmin1";
$dbname = "reservation";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}
?>