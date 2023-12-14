<?php
include_once("modele.php");
class proteine extends Modele{
 private $idproteine,$Nom,$Description,$Prix;
 function __construct(/*$id="",$ncin="",$nom="",$prenom="",$tel=""*/)
{
/*$this->idClient=$id;
$this->ncin=$ncin;
$this->nom=$nom;
$this->prenom=$prenom;
$this->tel=$tel;*/
parent::__construct();
 }
 function insert($idproteine,$Nom,$Description,$Prix){
 $query="insert into proteine(idproteine,Nom,Description,Prix)values (?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
return $res->execute(array($idproteine,$Nom,$Description,$Prix));
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
}?>