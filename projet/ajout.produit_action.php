<?php
require_once('proteineController.php');
require_once('proteine.php');
require_once('connexion.php');



$idproteine=$_POST['idproteine'];
$Nom=$_POST['Nom'];
$Description=$_POST['Description'];
$Prix=$_POST['Prix'];
$proteine=new proteine($idproteine,$Nom,$Description,$Prix);
$proteineCtr=new proteineController();
$res=$proteineCtr->insert($proteine);

if($res==true){

echo "<script> window.location='menu1.php';</script>";

}

else
{
    echo "<script>alert('Les champs vides doivent être remplis');  window.location='ajout.produit.html';</script>";

}




?>