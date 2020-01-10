<?php
require('services/DatabaseService.php');
require('services/AnnonceService.php');
require('services/UserService.php');
require('services/VoitureService.php');
class AnnonceController
{
    public function index(): string
    {

        $service = new AnnonceService();
        // var_dump($_POST['datePublication']);
        if (isset($_POST['villeA']) && isset($_POST['dateA']) && isset($_POST['villeD']) && isset($_POST['dateD']) && isset($_POST['nPlace']) && isset($_POST['prix']) && isset($_POST['voiture']) && isset($_POST['idConducteur'])&& isset($_POST['auteur'])) {
            // $o = new CommentUser($_POST['texte'], $_POST['idUserAuteur'], $_POST['datePublication'], $_POST['idUserAssocie']);

            $o = [
                'id' => null,
                'villeA' => $_POST['villeA'],
                'dateA' => $_POST['dateA'],
                'villeD' => $_POST['villeD'],
                'dateD' => $_POST['dateD'],
                'nPlace' => $_POST['nPlace'],
                'prix' => $_POST['prix'],
                'voiture' => $_POST['voiture'],
                'idConducteur' => $_POST['idConducteur'],
                'auteur' => $_POST['auteur']
            ];


            $isOk = $service->add($o);
        }

        $list = $service->getAll();
        // all users for select
        $userService = new UserService();
        $users = $userService->getAll();
        // all voiture for select
        $voitureService = new VoitureService();
        $voitures = $voitureService->getAll();
        $html = require('views/annonce.php');
        return $html;
    }
}
