<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoloader.php';
Autoloader::register();
include('./data.php');

?>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
<h1>Utilisateurs</h1>
    <table>
        <tr>
            <td>nom</td>
            <td>prénom</td>
            <td>mail</td>
            <td>date</td>
            <td>note</td>
            <td>options</td>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user->nom; ?></td>
                <td><?php echo $user->prenom; ?></td>
                <td><?php echo $user->mail; ?></td>
                <td><?php echo $user->date; ?></td>
                <td><?php echo $user->note; ?></td>
                <td><a href="detailUser.php?id=<?php echo $user->id; ?>">detail</a></td>
            </tr>
        <?php } ?>
    </table>
    <br><br>
<h1>Annonces</h1>
    <table>
        <tr>
            <td>id</td>
            <td>ville de départ</td>
            <td>date de départ</td>
            <td>ville d'arrivée</td>
            <td>date d'arrivée</td>
            <td>conducteur</td>
            <td>nombre de place</td>
            <td>prix</td>
        </tr>
        <?php foreach ($annonces as $annonce) { ?>
            <tr>
                <td><?php echo $annonce->id; ?></td>
                <td><?php echo $annonce->villeD; ?></td>
                <td><?php echo $annonce->dateD; ?></td>
                <td><?php echo $annonce->villeA; ?></td>
                <td><?php echo $annonce->dateA; ?></td>
                <td><?php echo $annonce->utilsateurConducteur->nom; ?></td>
                <td><?php echo $annonce->nPlace; ?></td>
                <td><?php echo $annonce->prix; ?></td>
                <td><a href="detailAnnonce.php?id=<?php echo $annonce->id; ?>">detail</a></td>
            </tr>
        <?php } ?>
    </table>










</body>

</html>