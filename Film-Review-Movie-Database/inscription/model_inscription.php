<?php
class inscription { //Déclaration de la classe inscription
//Déclaration des attributs
  private $_nom;
  private $_email;
  private $_telephone;
    private $_mdp;

  public function __construct($nom, $email, $mdp, $telephone){
//Partie SET
      $this->setNom($nom);
      $this->setemail($email);
	  $this->settelephone($telephone);
      $this->setmdp($mdp);

}

public function setnom($nom){
  if(empty($nom)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_nom = $nom;
}
public function setemail($email){
  if(empty($email)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_email = $email;
}
public function settelephone($telephone){
  if(empty($telephone)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_telephone = $telephone;
}
public function setmdp($mdp){
  if(empty($mdp)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_mdp = $mdp;
}

//Partie Get
public function getnom(){
  return $this->_nom;
}
public function getemail(){
  return $this->_email;
}
public function gettelephone(){
  return $this->_telephone;

}
public function getmdp(){
  return $this->_mdp;
}

}
?>
