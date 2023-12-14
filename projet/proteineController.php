<?php
include_once('proteine.php') ;
include_once('config.php');
class proteineController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(proteine $p){

$query="insert into proteine(idproteine,Nom,Description,Prix)values(?, ?, ?, ? )";
$res=$this->pdo->prepare($query);

$aryy =array($p->getidproteine(),$p->getNom(),$p->getDescription(),$p->getPrix()) ;

return $res->execute($aryy);

}

function getproteine($idproteine){
    $query="SELECT * FROM proteine WHERE idproteine = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($idproteine));
    $array= $res->fetch();
    return $array;
}

function delete($idproteine) {
$query = "delete from proteine where idproteine=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idproteine));
}

function liste(){
$query = "select * from proteine";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}



function modifier_user(proteine $p)
{
    $sql = "UPDATE proteine SET Nom=?, Description=?, Prix=? WHERE idproteine=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($p->getNom(),$p->getDescription(),$p->getPrix(),$p->getidproteine()));
}

public function chercherProteine($idproteine){
    $stmt = $this->pdo->prepare("SELECT * FROM proteine WHERE idproteine=:idproteine");
    $stmt->bindParam(':idproteine', $idproteine);
    $stmt->execute();  
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return count($res) > 0;  
}



}




?>