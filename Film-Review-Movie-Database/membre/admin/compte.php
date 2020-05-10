<?php $Auth->allow('member'); ?>
<?php
$req = $PDO->prepare('SELECT username,email FROM users WHERE id=:id'); //Préparer la table users, en sélectionnant username et email ou id=id
$req->execute(array(
    'id' => $Auth->user('id')                   
)); 
$user = $req->fetch();
?>

<h1>Bienvenue <?php echo $user->username; ?></h1>

<p>Votre adresse email </p>

<p><strong><?php echo $user->email; ?></strong></p>