<?php
require('services/CommentAnnonceService.php');
class CommentAnnonceController
{
    public function index(): string
    {

        $service = new CommentAnnonceService();
        // var_dump($_POST['datePublication']);
        if (isset($_POST['texte']) && isset($_POST['utilisateurAuteur']) && isset($_POST['datePublication']) && isset($_POST['annonceAssocie'])) {
            // $o = new CommentUser($_POST['texte'], $_POST['idUserAuteur'], $_POST['datePublication'], $_POST['idUserAssocie']);

            $o = [
                'texte' => $_POST['texte'],
                'utilisateurAuteur' => $_POST['utilisateurAuteur'],
                'datePublication' => $_POST['datePublication'],
                'annonceAssocie' => $_POST['annonceAssocie']
            ];


            $isOk = $service->add($o);
        }

        $list = $service->getAll();
        // test en attender mes camarades dont cree le service
        $users = [
            0 => ['id' => 1, 'name' => 'me'],
            1 => ['id' => 2, 'name' => 'you'],
        ];
        $html = require('views/commentAnnonce.php');
        return $html;
    }
}
