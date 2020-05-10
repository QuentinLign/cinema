<?php $Auth->allow('admin'); 
require 'bdd.php';
?>
<html>
<head>Afficher la table users</head>
<body>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Nom</th>
	   <th>Adresse mail</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?> <!-- Afficher sous forme de tableau des informations -->
     <tr> 
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['username']); ?></td>
	          <td><?php echo htmlspecialchars($row['email']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
<br>
<a href="http://localhost/Film-Review-Movie-Database/membre/admin/gestions">
  Gestion des utilisateurs
</a>
<br>
<a href="http://localhost/Film-Review-Movie-Database/membre/admin/gestions">
  Gestion des réservations
</a>

</html>
