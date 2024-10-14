<?php
require_once ("utilisateur.php");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['tel'];
    $user1=new Utilisateur($nom,$prenom,$email,$adresse,$tel);
    
    var_dump($user1);
    include("affichage.php");
    utilisateur($user1);
    
    
    
}


?>