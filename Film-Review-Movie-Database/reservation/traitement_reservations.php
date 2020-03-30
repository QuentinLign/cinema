<?php
require_once 'model_reservations.php';
require_once 'manager_reservations.php';
$reservations = new reservations($_POST["mail"], $_POST["film"], $_POST["nbplaces"],$_POST["paiement"]);
$co = new Manager();
$co->reservations($reservations);
?>
