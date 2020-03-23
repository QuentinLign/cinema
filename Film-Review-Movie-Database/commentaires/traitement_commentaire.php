<?php
require_once 'model_commentaire.php';
require_once 'manager_commentaire.php';
$commentaire = new commentaire($_POST["id"], $_POST["nom"], $_POST["commentaire"]);
$co = new Manager();
$co->commentaire($commentaire);
?>
