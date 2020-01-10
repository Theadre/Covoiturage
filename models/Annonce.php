<?php

class Annonce
{
    public $id;
    public $villeD;
    public $dateD;
    public $villeA;
    public $dateA;
    public $idConducteur;
    public $nPlace;
    public $prix;
    public $voiture;
    public $commentaires;
    public $auteur;

    public function __construct($id, $villeD, $dateD, $villeA, $dateA, $idConducteur, $nPlace, $prix , $voiture, $commentaires, $auteur)
    {
        $this->id = $id;
        $this->villeD = $villeD;
        $this->dateD = $dateD;
        $this->villeA = $villeA;
        $this->dateA = $dateA;
        $this->idConducteur = $idConducteur;
        $this->nPlace = $nPlace;
        $this->prix = $prix;
        $this->voiture = $voiture;
        $this->commentaires = $commentaires;
        $this->auteur = $auteur;
    }
}
