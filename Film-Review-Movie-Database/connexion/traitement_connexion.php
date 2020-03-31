<?php
$connexion = new connexion($_POST["email"],$_POST["mdp"]);
$co = new Manager();
$co->connexion($connexion);

?>
