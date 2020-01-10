<?php

class CommentaireAnnonce
{
    public $id;
    public $texte;
    public $utilisateurAuteur;
    public $datePublication;
    public $annonceAssocie;

    public function __construct($id, $texte, $utilisateurAuteur, $datePublication, $annonceAssocie)
    {
        $this->id = $id;
        $this->texte = $texte;
        $this->utilisateurAuteur = $utilisateurAuteur;
        $this->datePublication = $datePublication;
        $this->annonceAssocie = $annonceAssocie;
    }
}
