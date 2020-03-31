<?php
require 'model_connexion.php';
require 'traitement_connexion.php';
class Manager{ //Déclaration de la classe Manager
public function connexion($donnee){
//Connexion à la BDD
      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from utilisateurs where email = :email and mdp = :mdp');
    $req->execute(array('email'=>$donnee->getemail(), 'mdp'=>$donnee->getmdp()));
    $co = $req->fetch();
	$_SESSION['email'] = $donnee->getemail();
	$_SESSION['mdp'] = $donnee->getmdp();

  if ($co == true){
	
    header("location: index.php");
  }
  else{
    header("location: index.php");
  }
}



}

?>
