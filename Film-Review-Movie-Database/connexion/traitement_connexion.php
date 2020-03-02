<?php
$connexion = new connexion($_POST["login"],$_POST["mdp"]);
$co = new Manager();
$co->connexion($connexion);

?>
