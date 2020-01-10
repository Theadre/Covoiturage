<?php

class Reservation
{
    public $id;
    public $date;
    public $utilisateur;
    public $annonce;
    public $status;

    public function __construct($id, $date, $utilisateur, $annonce, $status)
    {
        $this->id = $id;
        $this->date = $date;
        $this->utilisateur = $utilisateur;
        $this->annonce = $annonce;
        $this->status = $status;
    }
}
