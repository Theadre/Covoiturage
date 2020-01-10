<?php

class User
{
    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $date;
    public $voitures;
    public $note;
    public $commentaires;
    public $reservations;

    public function __construct($id, $nom, $prenom, $mail, $date, $voitures, $note, $commentaires, $reservations)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->date = $date;
        $this->voitures = $voitures;
        $this->note = $note;
        $this->commentaires = $commentaires;
        $this->reservations = $reservations;
    }
}
