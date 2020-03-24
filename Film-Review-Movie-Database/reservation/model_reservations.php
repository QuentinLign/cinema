<?php
require_once 'manager_reservations.php';
require_once 'traitement_reservations.php';
class reservations { //Déclaration de la classe inscription
//Déclaration des attributs
  private $_login;
  private $_mail;
  private $_film;
  private $_nbplaces;
  private $_paiement;


  public function __construct($login, $mail, $film, $nbplaces, $paiement){
//Partie SET
      $this->setlogin($login);
      $this->setmail($mail);
      $this->setfilm($film);
      $this->setnbplaces($nbplaces);
      $this->setpaiement($paiement);
}

public function setlogin($login){
  if(empty($login)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_login = $login;
}
public function setmail($mail){
  if(empty($mail)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_mail = $mail;
}
public function setfilm($film){
  if(empty($film)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_film = $film;
}
public function setnbplaces($nbplaces){
  if(empty($nbplaces)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_nbplaces = $nbplaces;
}
public function setpaiement($paiement){
  if(empty($paiement)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_paiement = $paiement;
}

//Partie Get
public function getlogin(){
  return $this->_login;
}
public function getmail(){
  return $this->_mail;
}
public function getfilm(){
  return $this->_film;
}
public function getnbplaces(){
  return $this->_nbplaces;

}
public function getpaiement(){
  return $this->_paiement;

}
}
?>
