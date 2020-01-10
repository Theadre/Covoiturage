<?php
class CommentUserService
{
    public function add($data): bool
    {
        $isOk = false;

        $service = new DataBaseService();
        $isOk = $service->ajouterCommentaireUtilisateur($data);

        return $isOk;
    }

    public function getAll(): array
    {
        $objects = [];
        $service = new DataBaseService();
        $list = $service->getAll('commentaireutilisateur');
        
        foreach ($list as $element) {
            $o = new CommentaireUtilisateur($element['id'], $element['texte'], $element['utilisateurAuteur'], $element['datePublication'], $element['utilisateurAssocie']);
            
            $objects[] = $o;
        }

        return $objects;
    }
}
