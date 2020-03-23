<?php
require_once 'model_inscription.php';
require_once 'manager_inscription.php';
$inscription = new inscription($_POST["nom"], $_POST["email"], $_POST["mdp"], $_POST["telephone"]);
$co = new Manager();
$co->inscription($inscription);
?>
