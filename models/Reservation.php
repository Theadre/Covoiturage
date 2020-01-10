<?php

class Reservation
{
    public $id;
    public $date;
    public $idUtilisateur;
    public $idAnnonce;
    public $status;

    public function __construct($id, $date, $idUtilisateur, $idAnnonce, $status)
    {
        $this->id = $id;
        $this->date = $date;
        $this->idUtilisateur = $idUtilisateur;
        $this->idAnnonce = $idAnnonce;
        $this->status = $status;
    }
}
