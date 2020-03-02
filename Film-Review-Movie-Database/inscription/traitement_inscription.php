<?php
$inscription = new inscription($_POST["login"], $_POST["nom"], $_POST["prenom"], $_POST["telephone"], $_POST["mdp"], $_POST["email"], $_POST["role"]);
$signup = new Manager();
$signup->inscription($inscription);
?>
