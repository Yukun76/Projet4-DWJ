<header class="header banner" id="header-perso3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a href=""><img src="vue/img/logo.png" alt="Jean ForteRoche" id="logo2"></a>
			</div>
		</div>
	</div>
</header>

<?php if ($msgErreur): ?>
  <div class="alert alert-danger">
      <i class="fas fa-exclamation-triangle"></i>  Veuillez remplir correctement chaque(s) champ(s).
  </div>
<?php endif; ?>

<form method="post">
    <?= $form->input('title', 'Titre du chapitre'); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
<br>
<a class="btn btn-warning back-btn" href="./index.php"><i class="fas fa-arrow-left"></i> Retour</a>
