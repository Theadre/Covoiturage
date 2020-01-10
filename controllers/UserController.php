<?php
require('services/DatabaseService.php');
require('services/VoitureService.php');
require('services/UserService.php');
class UserController
{
    public function index(): string
    {

        $service = new UserService();

        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['date']) && isset($_POST['note'])) {

            $o = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'mail' => $_POST['mail'],
                'date' => $_POST['date'],
                'note' => $_POST['note']
            ];

            $isOk = $service->add($o);
        }

        $list = $service->getAll();
        $html = require('views/user.php');

        return $html;
    }
}
