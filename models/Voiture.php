<?php

class Voiture
{
    public $id;
    public $marque;
    public $model;
    public $couleur;
    public $nPlace;

    public function __construct($id, $marque, $model, $couleur, $nPlace)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->model = $model;
        $this->couleur = $couleur;
        $this->nPlace = $nPlace;
    }
}
