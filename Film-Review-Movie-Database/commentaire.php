<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- userprofile14:04-->
<head>
	<!-- Basoins basiques -->
	<title>Commentaire</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font as Fontaine-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Méta spécifique aux mobiles -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- fichiers CSS -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

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
<!--debut popup de connexion-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Connexion</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Nom d'uttilisateur:
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
<!--fin du popup de connexion-->
<!--debut du popup d'inscription-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Inscription</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Nom d'uttilisateur:
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
                    retapez votre mot de passe:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">S'inscrire</button>
           </div>
        </form>
    </div>
</div>
<!--fin du popup d'inscription-->

<!-- debut de l'en tete -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- La marque et la bascule sont regroupées pour un meilleur affichage mobile-->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Menu déroulant</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collectez les liens de navigation, les formulaires et autres contenus pour basculer -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
							Acceuil </i>
							</a>
							<ul class="dropdown-menu level1">

						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Vidéos<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li class="dropdown">
								</li>
								<li><a href="movielist.html">Liste de vidéos</a></li>
								<li><a href="moviesingle.html">Clip vidéos</a></li>
								<li class="it-last"><a href="seriessingle.html">Série simple/a></li>
							</ul>
						</li>

					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="404.html">page 404</a></li>
								<li class="it-last"><a href="comingsoon.html">Bientôt disponible</a></li>
							</ul>
						</li>
						<li><a href="#">Aide</a></li>
						<li class="loginLink"><a href="#">Connexion</a></li>
						<li class="btn signupLink"><a href="#">Inscription</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>

	    <!-- haut formulaire de recherche -->
	    <div class="top-search">
	    	<select>
				<option value="united">Emissions TV</option>
				<option value="saab">Autres</option>
			</select>
			<input type="text" placeholder="Recherchez un Film, une Emmission TV, une série ou une célébrité">
	    </div>
	</div>
</header>
<!-- fin de l'en tete-->


<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Changer l'avatar</a>
					</div>
					<div class="user-fav">
						<p>Détails du compte</p>
						<ul>
							<li  class="active"><a href="userprofile.html">Profil</a></li>
							<li><a href="userfavoritelist.html">Vidéos favorites</a></li>
							<li><a href="userrate.html">Films classés</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Autres</p>
						<ul>
							<li><a href="#">Changer le mot de passe</a></li>
							<li><a href="#">Déconnexion</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div>
				<form action="../Film-Review-Movie-Database/commentaires/manager_commentaire.php" method="post">
					<input type="text" id="nom" name="Avis" required
					       minlength="1" maxlength="2" size="3" placeholder="Nom">
								 <input type="text" id="commentaire" name="Note" required
       	 minlength="1" maxlength="2" size="3" placeholder="Avis">
				 <input type="submit" id="envoi" name="envoi" required
 minlength="1" maxlength="2" size="3">

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section pied de page-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>4, Allée rouget de lisle<br>
				93130, Noisy-le-sec</p>
				<p>Appelez nous: <a href="#">(+33) 6 49 11 19 00</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Ressources</h4>
				<ul>
					<li><a href="#">A propos</a></li>
					<li><a href="#">Blockbusters</a></li>
					<li><a href="#">Nous contacter</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Centre d'aide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Contrat d'uttilisation</a></li>
					<li><a href="#">Politique de confidentilité</a></li>
					<li><a href="#">Securité</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Compte</h4>
				<ul>
					<li><a href="#">Mon compte</a></li>
					<li><a href="#">Mes Films</a></li>
					<li><a href="#">Collections</a></li>
					<li><a href="#">Guide uttilisateurs</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="https://quentin-lignani.fr/">Amine & Quentin S.A.R.L</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Retour en haut  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- fin de la section pied de page-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- userprofile14:04-->
</html>
