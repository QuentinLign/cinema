<?php
require_once("db.php");
?>
<html>
<head>
<title>Gestions utilisateurs</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>
<?php	//Partie gestion utilisateur
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM users ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<h2>Liste des utilisateurs</h2>
<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="crud-icon/add.png" title="Nouveau" style="vertical-align:bottom;" /> Nouveau</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Nom</th>
	  <th class="table-header" width="40%">Email</th>
	  <th class="table-header" width="20%">Mot de passe</th>
	  	  <th class="table-header" width="20%">Role</th>
	  <th class="table-header" width="5%">Actions</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row"> <!-- Affichage avec echo des informations des utilisateurs -->
		<td><?php echo $row["username"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["password"]; ?></td>
				<td><?php echo $row["role_id"]; ?></td>
		<td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
</body>
<br>
<br>
<body>
<?php	//Partie gestion réservations
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM reservations ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<h2>Liste des reservations</h2>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Reservations</th>
	  <th class="table-header" width="40%">Nom</th>
	  <th class="table-header" width="20%">Mail</th>
	  	  <th class="table-header" width="20%">Film</th>
		  	  	  <th class="table-header" width="20%">Places</th>
	  <th class="table-header" width="5%">Actions</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row"> <!-- Affichage avec echo des informations des réservations -->
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["nom"]; ?></td>
		<td><?php echo $row["mail"]; ?></td>
				<td><?php echo $row["film"]; ?></td>
						<td><?php echo $row["nbplaces"]; ?></td>

		<td> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
</body>

</html>