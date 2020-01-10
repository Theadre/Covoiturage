<?php
require('DatabaseService.php');
class VoitureService
{
    public function add($data): bool
    {
        $isOk = false;

        $service = new DataBaseService();
        $isOk = $service->ajouterVoiture($data);

        return $isOk;
    }

    public function getAll(): array
    {
        $voitures = [];
        $service = new DataBaseService();
        $list = $service->getAll('voiture');
        
        foreach ($list as $element) {
            $voiture = new Voiture($element['id'], $element['marque'], $element['model'], $element['couleur'], $element['nPlace']);
            
            $voitures[] = $voiture;
        }

        return $voitures;
    }
}
