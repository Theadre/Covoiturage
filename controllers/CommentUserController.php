<?php
require('services/DatabaseService.php');
require('services/CommentUserService.php');
require('services/UserService.php');
class CommentUserController
{
    public function index(): string
    {

        $service = new CommentUserService();
        // var_dump($_POST['datePublication']);
        if (isset($_POST['texte']) && isset($_POST['utilisateurAuteur']) && isset($_POST['datePublication']) && isset($_POST['utilisateurAssocie'])) {
            // $o = new CommentUser($_POST['texte'], $_POST['idUserAuteur'], $_POST['datePublication'], $_POST['idUserAssocie']);

            $o = [
                'texte' => $_POST['texte'],
                'utilisateurAuteur' => $_POST['utilisateurAuteur'],
                'datePublication' => $_POST['datePublication'],
                'utilisateurAssocie' => $_POST['utilisateurAssocie']
            ];


            $isOk = $service->add($o);
        }

        $list = $service->getAll();
        // all users for select
        $userService = new UserService();
        $users = $userService->getAll();
        $html = require('views/commentUser.php');
        return $html;
    }
}
