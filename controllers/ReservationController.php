<?php
require('services/ReservationService.php');
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
        // test en attender mes camarades dont cree le service
        $users = [
            0 => ['id' => 1, 'name' => 'me'],
            1 => ['id' => 2, 'name' => 'you'],
        ];
        $html = require('views/reservation.php');
        return $html;
    }
}
