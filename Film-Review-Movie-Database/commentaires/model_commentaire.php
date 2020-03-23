<?php
require_once 'manager_commentaire.php';
require_once 'traitement_commentaire.php';
class inscription { //Déclaration de la classe inscription
//Déclaration des attributs
  protected $_id;
  protected $_nom;
  protected $_commentaire;

  public function __construct($id, $nom, $commentaire){
//Partie SET
      $this->setid($id);
      $this->setnom($nom);
      $this->setcommentaire($commentaire);
      $this->setcommentaire($commentaire);
}

public function setid($id){
  if(empty($id)){
    trigger_error('la variable doit etre remplie');
    return;
  }
  $this->_id = $id;
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

//Partie Get
public function getid(){
  return $this->_id;
}
public function getnom(){
  return $this->_nom;
}
public function getcommentaire(){
  return $this->_commentaire;
}

}
?>
