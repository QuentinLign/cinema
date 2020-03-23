<?php
require_once 'model_reservations.php';
require_once 'traitement_reservations.php';
class Manager{ //Déclaration de la classe Manager
public function reservations($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into reservations (login, mail, film, nb_places, paiement) VALUES(:login, :mail, :film, :nb_places, paiement)'); //Préparation de la table inscription avec les valeurs de la table
    $req->execute(array('login'=>$donnee->getlogin(),'mail'=>$donnee->getmail(), 'film'=>$donnee->getfilm(), 'nb_places'=>$donnee->getnb_places(),'paiement'=>$donnee->getpaiement())); //Execution des requêtes
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true){
     header("location: ingdex.php");
    }
    else{
     header("location: indgex.php");
    }

          }
}

?>
