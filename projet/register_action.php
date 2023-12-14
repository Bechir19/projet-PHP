<?php

include('utlisateur.php');

$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$email = $_POST['email'];
$Mot_passe = $_POST['Mot_passe'];

$utilisateur = new utilisateur();

if ($utilisateur->insert($Nom, $Prenom, $email, $Mot_passe)) {
    header('Location: login.register.php');
} else {
   
    echo "<script>alert('Tu n es pas creer un compte'); window.location='register_action.php';</script>";
}

?>
