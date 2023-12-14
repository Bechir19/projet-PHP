<?php

$cox = new mysqli('localhost', 'root', '', 'nutrition'); 
if ($cox->connect_error) {
    echo "Erreur de connexion à la base de données : " . $cox->connect_error;
} else {
    echo "Connexion à la base de données réussie.";
}


?>
