<?php
require_once 'model_commentaire.php';
require_once 'manager_commentaire.php';
$commentaire = new commentaire( $_POST["Avis"], $_POST["Note"]);
$co = new Manager();
$co->commentaire($commentaire);
?>
