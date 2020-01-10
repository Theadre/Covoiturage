<?php

class User
{
    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $date;
    public $note;

    public function __construct($id, $nom, $prenom, $mail, $date, $note)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->date = $date;
        $this->note = $note;
    }
}
