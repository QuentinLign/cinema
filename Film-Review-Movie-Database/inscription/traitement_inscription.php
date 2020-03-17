<?php
$inscription = new inscription($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["login"], $_POST["mdp"], $_POST["role"]);
$signup = new Manager();
$signup->inscription($inscription);
?>
