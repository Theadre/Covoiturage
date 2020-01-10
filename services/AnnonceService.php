<?php
// require('DatabaseService.php');
class AnnonceService
{
    public function add($data): bool
    {
        $isOk = false;

        $service = new DataBaseService();
        $isOk = $service->ajouterAnnonce($data);

        return $isOk;
    }

    public function getAll(): array
    {
        $objects = [];
        $service = new DataBaseService();
        $list = $service->getAll('Annonce');

        foreach ($list as $element) {
            $o = new Annonce($element['id'], $element['idConducteur'], $element['villeA'], $element['dateA'], $element['villeD'], $element['dateD'], $element['nPlace'], $element['prix'], $element['voiture'], $element['auteur']);
            $objects[] = $o;
        }

        return $objects;
    }
}
