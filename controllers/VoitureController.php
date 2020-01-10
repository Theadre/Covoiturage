<?php
require('services/VoitureService.php');
class VoitureController
{
    public function index(): string
    {
        
        $service = new VoitureService();
        // var_dump($_POST['marque']);
        if (isset($_POST['marque']) && isset($_POST['model']) && isset($_POST['couleur']) && isset($_POST['nPlace'])) {
            // $o = new Voiture($_POST['marque'], $_POST['model'], $_POST['couleur'], $_POST['nPlace']);

            $o = [
                'marque' => $_POST['marque'], 
                'model' => $_POST['model'], 
                'couleur' => $_POST['couleur'], 
                'nPlace' => $_POST['nPlace']
            ];

            $isOk = $service->add($o);
        }
        
        $list = $service->getAll();
        $html = require('views/voiture.php');
        
        return $html;
    }
}
