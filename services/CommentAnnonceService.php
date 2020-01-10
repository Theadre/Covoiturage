<?php
require('DatabaseService.php');
class CommentAnnonceService
{
    public function add($data): bool
    {
        $isOk = false;

        $service = new DataBaseService();
        $isOk = $service->ajouterCommentaireAnnonce($data);

        return $isOk;
    }

    public function getAll(): array
    {
        $objects = [];
        $service = new DataBaseService();
        $list = $service->getAll('commentaireannonce');

        foreach ($list as $element) {
            $o = new CommentaireAnnonce($element['id'], $element['texte'], $element['utilisateurAuteur'], $element['datePublication'], $element['annonceAssocie']);

            $objects[] = $o;
        }

        return $objects;
    }
}
