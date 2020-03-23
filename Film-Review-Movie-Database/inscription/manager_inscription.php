<?php
require_once 'model_inscription.php';
require_once 'traitement_inscription.php';
class Manager{ //Déclaration de la classe Manager
public function inscription($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into utilisateurs (nom, email, telephone, mdp) VALUES(:nom, :email, :telephone, :mdp)'); //Préparation de la table inscription avec les valeurs de la table
    $req->execute(array('nom'=>$donnee->getnom(),'email'=>$donnee->getemail(), 'telephone'=>$donnee->gettelephone(), 'mdp'=>md5($donnee->getmdp()))); //Execution des requêtes
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true){
     header("location: index.php");
    }
    else{
     header("location: mail.php"); //Redirection vers mail.php
    }

          }
}

?>
