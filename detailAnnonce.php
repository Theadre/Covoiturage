<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoloader.php';
Autoloader::register();
include('./data.php');

$id = $_GET['id'];
// isset($_GET['idUser'])


$annonceActuel = null;
// trouver user actuel
foreach ($annonces as $annonce) {
    if ($annonce->id == $id) {
        $annonceActuel = $annonce;
        // echo "{$user->id} == {$id}";
        break;
    }
}

$idAuteur = $annonceActuel->auteur->id;
echo "ville de départ: {$annonceActuel->villeD} <br>";
echo "date de départ: {$annonceActuel->dateD} <br>";
echo "ville d'arrivée: {$annonceActuel->villeA} <br>";
echo "date d'arrivée: {$annonceActuel->dateA} <br>";
echo "conducteur: {$annonceActuel->utilsateurConducteur->nom} <br>";
echo "nombre de place: {$annonceActuel->nPlace} <br>";
echo "prix: {$annonceActuel->prix} <br>";
echo "auteur: {$annonceActuel->auteur->nom} <a href=detailAuteur.php?id=$idAuteur>detail</a><br>";
echo "<br> <br>";
?>

<table>
    <tr>
        <td>id</td>
        <td>auteur</td>
        <td>date</td>
        <td>commentaire</td>
        <td>options</td>
    </tr>
    <?php foreach ($annonceActuel->commentaires as $commentaire) { ?>
        <tr>
            <td><?php echo $commentaire->id; ?></td>
            <td><?php echo $commentaire->utilisateurAuteur->nom; ?></td>
            <td><?php echo $commentaire->datePublication; ?></td>
            <td><?php echo $commentaire->texte; ?></td>
            <td><a href="detailAuteur.php?id=<?php echo $commentaire->utilisateurAuteur->id; ?>">detail</a></td>
        </tr>
    <?php } ?>
</table>