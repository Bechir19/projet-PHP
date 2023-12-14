<?php
require_once('proteineController.php');
require_once('proteine.php');

$proteineCtr = new proteineController();
$proteine = new proteine();

if(!empty($idproteine)){
}
    $idproteine=$_POST["valeur"];
    if($proteineCtr->chercherProteine($idproteine)) {
        
        echo "Produit existe.";
    } else {
        echo "Produit n'existe pas.";
    }

?>
