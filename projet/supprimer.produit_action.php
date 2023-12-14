<?php
require_once('proteineController.php');
$proteineCtr=new proteineController();
if ($proteineCtr->delete($_GET['id'])) {
    header('Location: menu1.php');
} else {
    echo "Erreur lors de la suppression: " . $proteine->getErrorMessage();
}

echo "r: $r<br>";
echo "idproteine: $idproteine<br>";




