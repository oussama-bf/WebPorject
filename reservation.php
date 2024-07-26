<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hotel = $_POST['hotel'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    include 'db_connect.php';  // Inclusion du fichier de connexion

    // Préparer et exécuter la requête SQL
    $sql = "INSERT INTO reservations (name, email, hotel, checkin, checkout) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $name, $email, $hotel, $checkin, $checkout);

    if ($stmt->execute()) {
        echo "Réservation réussie!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>