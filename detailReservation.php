<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoloader.php';
Autoloader::register();
include('./data.php');

$id = $_GET['id'];


// trover les reservation de ce utilisateur
$reservationsActuelle = null;
foreach ($reservations as $reservation) {
    if ($reservation->id == $id) {
        $reservationsActuelle = $reservation;
        break;
    }
}


echo "id: {$reservationsActuelle->id} <br>";
echo "date: {$reservationsActuelle->date} <br>";
echo "status: {$reservationsActuelle->status} <br>";
echo "<br> <br>"
?>
