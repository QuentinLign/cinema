<?php
require 'model_inscription.php';
require 'traitement_inscription.php';
class Manager{ //Déclaration de la classe Manager
public function inscription($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into inscription (login, nom, prenom, telephone, mdp,  email, role) VALUES(:login, :nom, :prenom, :telephone, :mdp, :email, :role)'); //Préparation de la table inscription avec les valeurs de la table
    $req->execute(array('login'=>$donnee->getlogin(),'nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(),'telephone'=>$donnee->gettelephone(), 'mdp'=>md5($donnee->getmdp(), 'email'=>$donnee->getemail(),'role'=>$donnee->getrole()))); //Execution des requêtes
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
