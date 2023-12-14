<?php
//include('connexion.php');

$email=$_POST['email'] ;
$Mot_passe=$_POST['Mot_passe'];
if(!empty($email)&&(!empty($Mot_passe)))
{
$cox =  new mysqli('localhost' , 'root' , '' , 'nutrition');
$req =("SELECT * FROM utilisateur WHERE email='$email' AND Mot_passe= '$Mot_passe' ");
$res = $cox->query($req);
if ($req == false) {
    die("Erreur de préparation de la requête: " . $cox->error);
} 
if ($res->num_rows > 0){ 
    
    header('Location: menu1.php');
}
else  {

    echo "<script>alert('Inserer vos donnees correctement'); window.location='login.register.php';</script>";
} 

}
else
{
    
    echo "<script>alert('Inserer vos donnees '); window.location='login.register.php';</script>";
}
?>