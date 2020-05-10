<?php //Connexion à la BDD 
	$database_username = 'root';
	$database_password = '';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=cinemapoo', $database_username, $database_password );
?>