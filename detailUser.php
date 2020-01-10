<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoloader.php';
Autoloader::register();
include('./data.php');

$id = $_GET['id'];
// isset($_GET['idUser'])


$userActuel = null;
// trouver user actuel
foreach ($users as $user) {
    if ($user->id == $id) {
        $userActuel = $user;
        // echo "{$user->id} == {$id}";
        break;
    }
}

// trover les reservation de ce utilisateur
$reservationsActuelle = array();
foreach ($reservations as $reservation) {
    if ($reservation->utilisateur->id == $id) {
        $reservationsActuelle[] = $reservation;
    }
}

echo "<h1>Informations</h1>";
echo "nom: {$userActuel->nom} <br>";
echo "prenom: {$userActuel->prenom} <br>";
echo "date: {$userActuel->date} <br>";
echo "note: {$userActuel->note} <br>";
echo "<br> <br>"
?>
<h3>Réservations</h3>
<table>
    <tr>
        <td>id</td>
        <td>options</td>
    </tr>
    <?php foreach ($reservationsActuelle as $reservation) { ?>
        <tr>
            <td><?php echo $reservation->id; ?></td>
            <td><a href="detailReservation.php?id=<?php echo $reservation->id; ?>">detail</a></td>
        </tr>
    <?php } ?>
</table>
