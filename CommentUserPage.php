<a href="VoiturePage.php">Voiture</a>

<a href="CommentUserPage.php">Comment User</a>

<a href="UserPage.php">User</a>

<a href="ReservationPage.php">Réservation</a>

<a href="AnnoncePage.php">Annonce</a>

<a href="CommentaireAnnoncePage.php">Commentaire Annonce</a>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('controllers/CommentUserController.php');
require 'autoloader.php';
Autoloader::register();

// $uri = $_SERVER['REQUEST_URI'];
// $verbe = $_SERVER['REQUEST_METHOD'];
// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($uri);
// if ($verbe === 'GET') {
// } else if ($verbe === 'POST') {
//     echo 'vers index plz';
// }
$controller = new CommentUserController();
$html = $controller->index();
echo $html;
