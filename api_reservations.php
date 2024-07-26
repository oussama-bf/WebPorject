<?php
include 'db_connect.php';

// Requête SQL pour récupérer toutes les réservations
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

$reservations = array();

if ($result->num_rows > 0) {
    // Stocker les données de chaque ligne dans un tableau
    while($row = $result->fetch_assoc()) {
        $reservations[] = $row;
    }
}

// Retourner les données en format JSON
header('Content-Type: application/json');
echo json_encode($reservations);

// Debug: Afficher les données dans la console du serveur
error_log(json_encode($reservations));

// Fermer la connexion
$conn->close();
?>