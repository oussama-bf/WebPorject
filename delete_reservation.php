<?php
include 'db_connect.php';
include 'Reservation.php';

$reservation = new Reservation($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    if ($reservation->deleteReservation($id)) {
        echo "Réservation supprimée avec succès!";
    } else {
        echo "Erreur lors de la suppression de la réservation.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Réservation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Supprimer Réservation</h1>
    <form action="delete_reservation.php" method="post">
        <label for="id">ID de la Réservation:</label>
        <input type="number" id="id" name="id" required><br>
        <input type="submit" value="Supprimer">
    </form>
</body>
</html>
