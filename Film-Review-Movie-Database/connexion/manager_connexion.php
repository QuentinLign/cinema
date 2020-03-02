<?php
require 'model_connexion.php';
require 'traitement_connexion.php';
class Manager{ //Déclaration de la classe Manager
public function connexion($donnee){
//Connexion à la BDD
      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from inscription where login = :login and mdp = :mdp');
    $req->execute(array('login'=>$donnee->getlogin(), 'mdp'=>$donnee->getmdp()));
    $co = $req->fetch();
	$_SESSION['login'] = $donnee->getlogin();
	$_SESSION['mdp'] = $donnee->getmdp();

  if ($co == true){
	
    header("location: moncompte.php");
  }
  else{
    header("location: welcome.php");
  }
}



}

?>
