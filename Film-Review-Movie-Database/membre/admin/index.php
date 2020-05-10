<?php
session_start();


// Instance PDO
try{
	$PDO = new PDO('mysql:host=localhost;dbname=cinemapoo','root',''); 
	$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	$PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}catch(PDOException $e){
	echo 'Connexion impossible';
}

// Class Auth
require "class.auth.php";

ob_start();
include((isset($_GET['p']) ? $_GET['p'] : 'home').'.php');
$content_for_layout = ob_get_clean(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="../theme/style.css" type="text/css" media="screen" />
</head>

<body>
  <div id="conteneur">
    
    
  <?php if($Auth->user('id')): ?> <!-- Menu de navigation -->
  <h1>Bonjour <?php echo $Auth->user('login'); ?></h1>
  <ul>
      <li><a href="index.php?p=compte">Mon compte</a></li>
      <?php if($Auth->user('role') == 'admin'): ?> <!-- Seul l'utilisateur qui a le role de "admin" peut accÈder ‡ la page "Administration" -->
      <li><a href="index.php?p=admin">Administration</a></li>
      <?php endif; ?>
      <li><a href="index.php?p=logout">Se d√©connecter</a></li>
      
  </ul>
  <?php else: ?>
    <a href="index.php?p=login">Se connecter</a>
  <?php endif; ?>
    
      <?php echo $content_for_layout; ?>
      
  </div>
</body>