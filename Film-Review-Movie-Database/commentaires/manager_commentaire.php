<?php
require_once 'model_commentaire.php';
require_once 'traitement_commentaire.php';
class Manager{ //Déclaration de la classe Manager
public function inscription($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into commentaire (id, nom, commentaire) VALUES(:id, :nom, :commentaire)'); //Préparation de la table commentaire avec les valeurs de la table
    $req->execute(array('id'=>$donnee->getid(),'nom'=>$donnee->getnom(), 'commentaire'=>$donnee->getcommentaire())); //Execution des requêtes à travers un tableau
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true){
     header("location: moviesingle.html"); //redirection vers moviesingle.html
    else{
     header("location: index.html"); //Redirection vers index.html
    }

          }
}

?>
