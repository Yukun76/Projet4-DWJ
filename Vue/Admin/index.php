<!DOCTYPE html>
<html lang="fr">
	<div class="allbody">
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
									<a class="nav-item nav-link" href="admin"><i class="fas fa-bars"></i> Tableau de bord</a>
									<a class="nav-item nav-link" href="./admin/Episode/"><i class="fas fa-book"></i> Episodes</a>
									<a class="nav-item nav-link" href="./admin/comment/"><i class="far fa-comment"></i> Commentaires</a>
									<a class="nav-item nav-link" href="connexion/deconnecter"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<script>

</script>
			<div class="container" id="left_contain">
				<hr id="adminHR">
				<br/>
				<h2>Tableau de bord</h2>
				<br/>
				<hr id="adminHR">
				<br/>
				<h3>Bienvenue, <?= $this->nettoyer($login) ?> ! </h3>
				<p>Ce blog comporte : <?= $this->nettoyer($nbBillets) ?> billet(s) et  <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).<p>
					<div class="col-md-10 col-lg-offset-2 ">
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Votre profil</h4></div>
							<div class="panel-body">
								<div class="box box-info">
									<div class="box-body">
										<div class="col-sm-4">
											<form action="/action_page.php">
												<div align="center"><img alt="User Pic" src="vue/img/photojean.jpg" id="profile-image1" class="img-circle img-responsive">
												</div>
												<input type="file" name="pic" accept="image/*">
												<input type="submit">
											</form>
										</div>
										<br>
									</div>
									<div class="clearfix"></div>
									<hr class="HRprofil" style="margin:5px 0 5px 0;">
									<div class="col-sm-5 col-xs-6 tital ">Nom:  </div>
									<div class="col-sm-5 col-xs-6 tital ">Prénom:</div>
									<div class="col-sm-7"></div>
									<div class="col-sm-5 col-xs-6 tital ">Identifiant : <?= $this->nettoyer($login) ?></div>
									<div class="col-sm-7"></div>
									<div class="col-sm-5 col-xs-6 tital ">Date de naissance :</div>
									<div class="col-sm-7"></div>
								</div>
							</div>
						</div>
					</div>
					</div><!-- /.container -->
				</body>
			</div>
		</html>