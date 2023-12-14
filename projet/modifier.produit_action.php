<?php
require_once('proteineController.php');
require_once('proteine.php');


$proteineCtr = new proteineController();
$proteine = new proteine();


$idproteine = $_POST['idproteine'];
echo $idproteine;
$proteine->setidproteine($_POST['idproteine']);
$proteine->setNom($_POST['Nom']);
$proteine->setDescription($_POST['Description']);
$proteine->setprix($_POST['Prix']);

try {
    $proteineCtr->modifier_user($proteine);
    echo "<script>window.location.href = 'menu1.php';</script>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
