<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hotel = $_POST['hotel'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    include 'db_connect.php';
    include 'Reservation.php';

    $reservation = new Reservation($conn);

    if ($reservation->createReservation($name, $email, $hotel, $checkin, $checkout)) {
        echo "Réservation réussie!";
    } else {
        echo "Erreur lors de la réservation.";
    }

    $conn->close();
}
?>
