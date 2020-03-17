<?php
require 'model_inscription.php';
require 'traitement_inscription.php';
class Manager{ //Déclaration de la classe Manager
public function inscription($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into inscription (nom, prenom, mail, login, mdp, role) VALUES(:nom, :prenom, :mail, :login, :mdp, :role)'); //Préparation de la table inscription avec les valeurs de la table
    $req->execute(array('nom'=>$donnee->getnom(),'prenom'=>$donnee->getprenom(), 'mail'=>$donnee->getmail(),'login'=>$donnee->getlogin(), 'mdp'=>md5($donnee->getmdp(), 'role'=>$donnee->getrole()))); //Execution des requêtes
    $resultat = $req->fetch();
	//Conditions de redirection
    if ($resultat ==true){
      header("location: index.php");
    }
    else{
      header("location: ../Connexion/connexion.php");
    }

          }
}

?>
