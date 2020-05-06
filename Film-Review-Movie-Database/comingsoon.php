<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- comingsoon14:54-->
<head>
	<!-- Besoins basiques -->
	<title>Bientôt disponible</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Meta spécifique aux mobiles -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- fichiers CSS -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/commentaires.css">

</head>
<body>
<!--préchargement-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--fin du préchargement-->
<!--formulaire de connexion popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Connecion</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Nom d'utilisateur:
                    <input type="text" name="username" id="username" placeholder="ex:Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>

            <div class="row">
            	<label for="password">
                    Mot de passe:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Se souvenir de moi</span>
					</div>
            		<a href="#">Mot de passe oublié ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Connexion</button>
           </div>
        </form>
        <div class="row">
        	<p>Ou via réseau social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>Twitter</a>
            </div>
        </div>
    </div>
</div>
<!--popup de fin de formulaire de connexion-->
<!--popup de formulaire d'inscription-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Inscription</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Nom d'utilisateur:
                    <input type="text" name="username" id="username-2" placeholder="ex:Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>

            <div class="row">
                <label for="email-2">
                    Votre addresse mail:
                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Mot de passe:
                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    Retapez votre mot de passe:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">Inscription</button>
           </div>
        </form>
    </div>
</div>
<!--popup de fin de formulaire d'inscription-->
<div class="page-single-2">
	<div class="container">
		<div class="row ipad-width">
			<div class="left-content">
				<a href="index.html"><img class="md-logo" src="images/logo1.png" alt=""></a>
				<h1>Donnez votre avis</h1>
				<p>Cela  est important pour nourrir le débat et l'enrichir</p>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3>Donnez votre Avis</h3>
						<form action="../Film-Review-Movie-Database/commentaires/manager_commentaire.php" method="post">
							<input class="email" id="nom" type="text" name="Avis" placeholder="Nom" required>
							<input class="email" id="commentaire" name="Note" required type="text" placeholder="Avis">
							<input class="redbtn" id="envoi" type="submit" name="envoi" placeholder="envoi">
						</form>

<?php
// Connexion à la base de données
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', '');
}
catch(Exception $e)
{
			 die('Erreur : '.$e->getMessage());
}

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>
<div class="news">
	 <h3>
			 <?php echo htmlspecialchars($donnees['titre']); ?>
			 <em>le <?php echo $donnees['date_creation_fr']; ?></em>
	 </h3>

	 <p>
	 <?php
	 // On affiche le contenu du billet
	 echo nl2br(htmlspecialchars($donnees['contenu']));
	 ?>
	 <br />
	 <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
	 </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img class="cm-img" src="images/uploads/cm-img.png" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
<!-- fichiers javascipt-->
</body>

<!-- comingsoon14:55-->
</html>
