<?php

class proteine {
private $idproteine,$Nom,$Description,$Prix;
function __construct($idproteine="",$Nom="",$Description="",$Prix="") {
	
    $this->idproteine=$idproteine;
    $this->Nom=$Nom;
    $this->Description=$Description;
    $this->Prix=$Prix;
}


//les getters 
public function getidproteine(){
	return $this->idproteine;
}

public function getNom(){
	return $this->Nom;
}

public function getDescription(){
	return $this->Description;
}

public function getPrix(){
	return $this->Prix;
}
public function getimage()
{
    return $this->image;
}




// setters 
public function setNom($Nom){
        $this->Nom = $Nom;
    }

public function setidproteine($idproteine){
        $this->idproteine = $idproteine;
    }

public function setDescription($Description){
        $this->Description = $Description;
    }

 public function setPrix($Prix){
        $this->Prix = $Prix	;
    }
    public function srtimage()
{
    
        $this->image=$image;

}




	
}?>