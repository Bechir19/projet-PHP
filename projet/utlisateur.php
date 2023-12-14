<?php
include_once("modele.php");

class Utilisateur extends Modele {
    private $Nom, $Prenom, $email, $Mot_passe;

    public function __construct() {
        parent::__construct();
    }

    public function insert($Nom, $prenom, $email, $Mot_passe) {
        $query = "INSERT INTO utilisateur (Nom, Prenom, email, Mot_passe) VALUES (?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($Nom, $prenom, $email, $Mot_passe));
    }

  
}
?>
