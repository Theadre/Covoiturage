<?php

class DataBaseService
{
    const HOST = 'localhost';
    const PORT = '3306';
    const DATABASE_NAME = 'covoiturage';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = '';

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO( //chaîne de connexion ce qui permet de communiquer avec toutes la base de données
                'mysql:host=' . self::HOST . ';port=' . self::PORT . ';dbname=' . self::DATABASE_NAME,
                self::MYSQL_USER,
                self::MYSQL_PASSWORD
            );
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
        }
    }

    public function ajouterVoiture($o): bool
    {
        $isOk = false;
        $sql = 'INSERT INTO voiture (marque, model, couleur, nPlace) VALUES (:marque, :model, :couleur, :nPlace)';
        $query = $this->connection->prepare($sql);
        $isOk = $query->execute($o);

        return $isOk;
    }

    public function ajouterUser($o)
    {
        $isOk = false;
        $sql = 'INSERT INTO user (nom, prenom, mail, date, note) VALUES (:nom, :prenom, :mail, :date, :note)';
        $query = $this->connection->prepare($sql);
        $isOk = $query->execute($o);

        return $isOk;
    }

    public function ajouterCommentaireUtilisateur($o): bool
    {
        $isOk = false;
        $sql = 'INSERT INTO commentaireutilisateur (utilisateurAuteur, utilisateurAssocie, datePublication, texte) VALUES (:utilisateurAuteur, :utilisateurAssocie, :datePublication, :texte)';
        $query = $this->connection->prepare($sql);
        $isOk = $query->execute($o);

        return $isOk;
    }

    public function ajouterCommentaireAnnonce($o): bool
    {
        $isOk = false;
        $sql = 'INSERT INTO commentaireannonce (texte, annonceAssocie, datePublication, utilisateurAuteur) VALUES (:texte, :annonceAssocie, :datePublication, :utilisateurAuteur)';
        $query = $this->connection->prepare($sql);
        $isOk = $query->execute($o);

        return $isOk;
    }

    public function ajouterAnnonce($o): bool
    {
        $isOk = false;
        $sql = 'INSERT INTO annonce (idConducteur, villeA, dateA, villeD, dateD, nPlace, prix, voiture, commentaires, auteur) VALUES (:(idConducteur, :villeA, :dateA, :villeD, :dateD, :nPlace, :prix, :voiture, :commentaires, :auteur))';
        $query = $this->connection->prepare($sql);
        $isOk = $query->execute($o);

        return $isOk;
    }

    public function ajouterReservation($o): bool
    {
        $isOk = false;
        $sql = 'INSERT INTO reservation (date, idUtilisateur, idAnnonce, status) VALUES (:date, :idUtilisateur, :idAnnonce, :status)';
        $query = $this->connection->prepare($sql);
        $isOk = $query->execute($o);

        return $isOk;
    }

    public function getAll($tableName): array
    {
        $list = [];

        $sql = "SELECT * FROM {$tableName}";
        $query = $this->connection->query($sql);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($results)) {
            $list = $results;
        }

        return $list;
    }
}
