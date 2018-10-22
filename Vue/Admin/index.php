<?php $this->titre = "Mon Blog - Tableau de bord "?>
<!DOCTYPE html>
<html lang="fr">
	<div class="allbody">
		<body>
			<div class="header" id="header-perso5">
				<div class="top-header">
					<div class="container">
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="nav_admin">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAdminMarkup" aria-controls="navbarNavAdminMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNavAdminMarkup">
								<div class="sidenav">	
									<a class="nav-item nav-link" id="retour_acceuil" href="Accueil"><i class="fas fa-home"></i>Accueil</a>
									<a class="nav-item nav-link" href="admin"><i class="fas fa-bars"></i> Tableau de bord</a>
									<a class="nav-item nav-link" href="./admin/auteur/"><i class="fa fa-address-book"></i> Auteur</a>
									<a class="nav-item nav-link" href="./admin/Billet/"><i class="fas fa-book"></i> Billets</a>
									<a class="nav-item nav-link" href="./admin/comment/"><i class="far fa-comment"></i> Commentaires</a>
									<a class="nav-item nav-link" href="connexion/deconnecter"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="container" id="left_contain">
				<hr id="adminHR">
				<br/>
				<h1 class="title-id" id="board_title"><i class="fas fa-bars"></i> Tableau de bord</h1>
				<br/>
				<hr id="adminHR">

				<br/>
				<h3>Bienvenue, <?= $this->nettoyer($login) ?> ! </h3>
				<p>Ce blog comporte : <?= $this->nettoyer($nbBillets) ?> billet(s) et  <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).</p>				
				<div class="col-md-10 col-lg-offset-2 ">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Votre profil</h4></div>
						<div class="panel-body">
							<div class="box box-info">
								<div class="box-body">
									<div class="col-sm-4">
										<form action="/action_page.php">
											<img alt="User Pic"src="Public/img/<?= $this->nettoyer($auteur->getPhoto()) ?>"
                         					class="img-thumbnail img-responsive" id="photo_profil">					
										</form>
									</div>
									<br>
								</div>
								<div class="clearfix"></div>
								<hr class="HRprofil" style="margin:5px 0 5px 0;">	
								<div class="col-sm-5 col-xs-6 tital ">Identifiant : <?= $this->nettoyer($login) ?></div>		
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
			</body>
		</div>
	</html>