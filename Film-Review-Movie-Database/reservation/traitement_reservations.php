<?php
require_once 'model_reservations.php';
require_once 'manager_reservations.php';
$reservations = new reservations($_POST["login"], $_POST["mail"], $_POST["film"], $_POST["nb_places"],$_POST["paiement"]);
$co = new Manager();
$co->reservations($reservations);
?>
