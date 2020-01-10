<?php

class CommentaireUtilisateur
{
    public $id;
    public $texte;
    public $utilisateurAuteur;
    public $datePublication;
    public $utilisateurAssocie;

    public function __construct($id, $texte, $utilisateurAuteur, $datePublication, $utilisateurAssocie)
    {
        $this->id = $id;
        $this->texte = $texte;
        $this->utilisateurAuteur = $utilisateurAuteur;
        $this->datePublication = $datePublication;
        $this->utilisateurAssocie = $utilisateurAssocie;
    }
}