<?php

class Utilisateur{
    private $nom;
    private $prenom;
    private $email;
    private $adresse;
    private $tel;
    
    public function __construct($nom,$prenom,$email,$adresse,$tel){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->adresse=$adresse;
        $this->tel=$tel;
    }
    public function afficherUtilisateur(){
        echo 'Nom'.$this->nom;
        echo 'Prenom'.$this->prenom;
        echo 'email'.$this->email;
        echo 'adresse'.$this->adresse;
        echo 'tel'.$this->tel;
    }
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getTel() {
        return $this->tel;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }
    
}
require_once("connexionBD.php");
function utilisateur($user) {
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, adresse, tel) 
            VALUES (:nom, :prenom, :email, :adresse, :tel)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'email' => $user->getEmail(),
            'adresse' => $user->getAdresse(),
            'tel' => $user->getTel()
        ]);
        echo "Utilisateur ajouté avec succès";
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
        
    }
}

?>