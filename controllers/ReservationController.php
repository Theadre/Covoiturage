<?php
require('services/DatabaseService.php');
require('services/ReservationService.php');
require('services/AnnonceService.php');
require('services/UserService.php');
class ReservationController
{
    public function index(): string
    {

        $service = new ReservationService();
        // var_dump($_POST['datePublication']);
        if (isset($_POST['date']) && isset($_POST['idUtilisateur']) && isset($_POST['idAnnonce']) && isset($_POST['status'])) {
            // $o = new CommentUser($_POST['texte'], $_POST['idUserAuteur'], $_POST['datePublication'], $_POST['idUserAssocie']);

            $o = [

                'date' => $_POST['date'],
                'idUtilisateur' => $_POST['idUtilisateur'],
                'idAnnonce' => $_POST['idAnnonce'],
                'status' => $_POST['status']
            ];

            $isOk = $service->add($o);
        }

        $list = $service->getAll();
       // all users for select
       $userService = new UserService();
       $users = $userService->getAll();
       // all Annoce for select
       $annonceService = new AnnonceService();
       $annonces = $annonceService->getAll();
        $html = require('views/reservation.php');
        return $html;
    }
}
