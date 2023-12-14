<?php
require_once('connexion.php');

if (isset($db)) {
    $db = null; 
}

echo "Déconnexion de la base de données réussie.";
?>
