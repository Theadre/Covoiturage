<?php
// require('DatabaseService.php');
class UserService
{
    public function add($data): bool
    {
        $isOk = false;

        $service = new DataBaseService();
        $isOk = $service->ajouterUser($data);

        return $isOk;
    }

    public function getAll(): array
    {
        $objects = [];
        $service = new DataBaseService();
        $list = $service->getAll('User');

        foreach ($list as $element) {
            $o = new User($element['id'], $element['nom'], $element['prenom'], $element['mail'], $element['date'],  $element['note']);
            $objects[] = $o;
        }

        return $objects;
    }
}
