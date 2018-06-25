<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
		<?php $this->titre = "Mon Blog - Administration" ?>
	</head>
	<header class="header banner" id="header-perso3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href=""><img src="vue/img/logo.png" alt="Jean ForteRoche" id="logo2"></a>
            </div>
        </div>
    </div>
</header>
	<div id="allbody">
		<body>
			<div class="header" id="header-perso">
				<div class="top-header">
					<div class="container">
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
								<div class="sidenav">
									<hr>
									<a class="nav-item nav-link" href="#"><i class="fas fa-book"></i> Episodes</a>
									<hr>
									<a class="nav-item nav-link" href=""><i class="far fa-comment"></i> Commentaires</a>
									<hr>
									<a class="nav-item nav-link" href="connexion/deconnecter"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
									<hr>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="container" id="left_contain">
				<h2>Administration</h2>
				<br/>
				<hr>
				<br/>
				<h3>Bienvenue, <?= $this->nettoyer($login) ?> ! </h3><br />
				<p>Nombre de billet : <?= $this->nettoyer($nbBillets) ?> billet(s) <br /> Nombre de commentaire : <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).<p>
			</div><!-- /.container -->
			</body>
		</div>
	</html>

