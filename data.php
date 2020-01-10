<?php


$sow = new User(
    1,
    "sow",
    "mr",
    "mail@angular.io",
    "11/11/2019",
    [], // voiture : ya pas
    2,
    [], // commentaires : ya pas
    [] // reservations
);
$jeremy = new User(
    2,
    "jeremy",
    "jr",
    "mail@angular.io",
    "11/11/2019",
    [], // voiture : ya pas
    2,
    [], // commentaires : ya pas
    []// reservations
);

$commentairesUtilisateurs = [
    new CommentaireUtilisateur(1, "triché sur les anciennes promotions", $jeremy, "31/05/2050", $sow),
    new CommentaireUtilisateur(2, "Les profs nous ont donnés la correction avant le test", $jeremy, "01/01/2025",$sow ),
    new CommentaireUtilisateur(3, "Merci Google", $sow, "31/05/2950", $jeremy ),
];

$mourabit = new User(
    3,
    "mohamed",
    "mourabit",
    "mail@angular.io",
    "11/11/2019",
    [], // voiture : ya pas
    2,
    $commentairesUtilisateurs,
    []// reservations
);

$reservations = [
    new Reservation(1, "10/10/2019", $sow, null, 'active'),
    new Reservation(2, "10/11/2019", $sow, null, 'active'),
    new Reservation(3, "10/11/2019", $jeremy, null, 'active'),
    new Reservation(4, "10/10/2019", $mourabit, null, 'active'),
    new Reservation(5, "10/11/2019", $mourabit, null, 'active'),
    new Reservation(6, "10/10/2019", $jeremy, null, 'active'),
];

$users = [$sow, $jeremy, $mourabit];

$commentairesAnnonces = [
    new CommentaireAnnonce(1, "blabla", $sow, "31/11/2999",$jeremy ),
    new CommentaireAnnonce(2, "test", $mourabit, "01/01/2019",$sow ),
    new CommentaireAnnonce(3, "copiercollésurinternet", $jeremy, "31/11/2999", $mourabit ),
];

$annonce = new Annonce(1, "Limoges", "20/10/2019", "Paris", "30/10/2019", $sow, 11, 100,null, [], $sow);
$annonce2= new Annonce(2, "Tontouta", "20/10/2019", "Païta", "30/10/2019", $mourabit, 35, 900,null, $commentairesAnnonces, $jeremy);
$annonce3 = new Annonce(3, "Nouméa", "20/10/2019", "Auckland", "30/10/2019", $jeremy, 450, 1938,null, [], $mourabit);

$annonces =[$annonce, $annonce2, $annonce3 ];