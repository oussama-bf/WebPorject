<?php
include 'db_connect.php';

// Requête SQL pour récupérer toutes les réservations
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Hôtel</th><th>Date d'Arrivée</th><th>Date de Départ</th><th>Date d'Enregistrement</th></tr>";
    
    // Afficher les données de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["hotel"]. "</td><td>" . $row["checkin"]. "</td><td>" . $row["checkout"]. "</td><td>" . $row["reg_date"]. "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
