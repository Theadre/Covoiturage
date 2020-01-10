<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoloader.php';
Autoloader::register();
include('./data.php');

$id = $_GET['id'];
// isset($_GET['idUser'])


$auteurAtuel = null;
// trouver user actuel
foreach ($users as $auteur) {
    if ($auteur->id == $id) {
        $auteurActuel = $auteur;
        // echo "{$user->id} == {$id}";
        break;
    }
}

echo "ville de départ: {$auteurActuel->nom} <br>";
echo "date de départ: {$auteurActuel->prenom} <br>";
echo "ville d'arrivée: {$auteurActuel->mail} <br>";
echo "date d'arrivée: {$auteurActuel->date} <br>";
echo "nombre de place: {$auteurActuel->note} <br>";
echo "<br> <br>";