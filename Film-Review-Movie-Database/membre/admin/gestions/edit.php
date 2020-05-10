<?php
require_once("db.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update users set username='" . $_POST[ 'username' ] . "', email='" . $_POST[ 'email' ] . "', password='" . $_POST[ 'password' ] . "', role_id='" . $_POST[ 'role_id' ] ); //Préparation de la table users pour mettre à jour des informations
	$result = $pdo_statement->execute(); //Execution des données sur la BDD
	if($result) {
		header('location:index.php'); //Si OK redirection vers index
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT username,email FROM users where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<html>
<head>
<title>Editer</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Retour</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Modification</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Nom: </label><br>
	  <input type="text" name="username" class="demo-form-field" value="<?php echo $result[0]['username']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Email: </label><br>
	  <textarea name="email" class="demo-form-field" rows="5" required ><?php echo $result[0]['email']; ?></textarea>
  </div>
    <div class="demo-form-row">
	  <label>Mot de passe: </label><br>
	  <textarea name="password" class="demo-form-field" rows="5" required ><?php echo $result[0]['password']; ?></textarea>
  </div>

  <div class="demo-form-row">
	  <label>Role: </label><br>
	  <textarea name="role_id" class="demo-form-field" rows="5" required ><?php echo $result[0]['role_id']; ?></textarea>
  </div>

  <div class="demo-form-row">
	  <input name="save_record" type="submit" value="Enregistrer" class="demo-form-submit">
  </div>
  </form>
</div>
</body>
</html>