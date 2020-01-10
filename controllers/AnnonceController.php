<?php
require('services/AnnonceService.php');
class AnnonceController
{
    public function index(): string
    {

        $service = new AnnonceService();
        // var_dump($_POST['datePublication']);
        if (isset($_POST['villeA']) && isset($_POST['dateA']) && isset($_POST['villeD']) && isset($_POST['dateD']) && isset($_POST['nPlace']) && isset($_POST['prix']) && isset($_POST['voiture']) && isset($_POST['commentaires'])&& isset($_POST['auteur'])) {
            // $o = new CommentUser($_POST['texte'], $_POST['idUserAuteur'], $_POST['datePublication'], $_POST['idUserAssocie']);

            $o = [

                'villeA' => $_POST['villeA'],
                'dateA' => $_POST['dateA'],
                'villeD' => $_POST['villeD'],
                'dateD' => $_POST['dateD'],
                'nPlace' => $_POST['nPlace'],
                'prix' => $_POST['prix'],
                'voiture' => $_POST['voiture'],
                'commentaires' => $_POST['commentaires'],
                'auteur' => $_POST['auteur']
            ];


            $isOk = $service->add($o);
        }

        $list = $service->getAll();
        // test en attender mes camarades dont cree le service
        $users = [
            0 => ['id' => 1, 'name' => 'me'],
            1 => ['id' => 2, 'name' => 'you'],
        ];
        $html = require('views/annonce.php');
        return $html;
    }
}
