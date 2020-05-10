<?php
if(!empty($_POST["add_record"])) {
	require_once("db.php");
	$sql = "INSERT INTO users (username, email, password, role_id ) VALUES ( :username, :email, :password, :role_id )"; //Insertion d'une ligne sur la table users
	$pdo_statement = $pdo_conn->prepare( $sql );
		
	$result = $pdo_statement->execute( array( ':username'=>$_POST['username'], ':email'=>$_POST['email'], ':role_id'=>$_POST['role_id'], ':password'=>$_POST['password'] ) );
	if (!empty($result) ){
	  header('location:index.php');
	}
}
?>
<html>
<head>
<title>Ajouter un utilisateur</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Retour</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Ajouter un utilisateur</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Nom: </label><br>
	  <input type="text" name="username" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Email: </label><br>
	  <textarea type="email" name="email" class="demo-form-field" rows="5" required ></textarea>
  </div>
    <div class="demo-form-row">
	  <label>Mot de passe : </label><br>
	  <textarea type="password" name="password" class="demo-form-field" rows="5" required ></textarea>
  </div>

   <div class="demo-form-row">
	  <label>Role: </label><br>
	  <p>1 : Administrateur, 2 : Membre
	  <br>
	  <textarea name="role_id" class="demo-form-field" rows="2" required ></textarea>
  </div>
 
  <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Ajouter !" class="demo-form-submit">
  </div>
  </form>
</div> 
</body>
</html>
