<?php
require_once 'manager_commentaire.php';
require_once 'traitement_commentaire.php';
class model_commentaire { //Déclaration de la classe inscription
//Déclaration des attributs
  protected $_nom;
  protected $_commentaire;

  public function __construct($nom, $commentaire){
//Partie setter
      $this->setnom($nom);
      $this->setcommentaire($commentaire);
      $this->setcommentaire($commentaire);
}


public function setemail($nom){
  if(empty($nom)){
    trigger_error('la variable doit etre remplie');
    return;
  }
  $this->_nom = $nom;
}
public function setcommentaire($commentaire){
  if(empty($commentaire)){
    trigger_error('la variable doit etre remplie');
    return;
  }
  $this->_commentaire = $commentaire;
}

//Partie Getter

public function getnom(){
  return $this->_nom;
}
public function getcommentaire(){
  return $this->_commentaire;
}

}
?>
