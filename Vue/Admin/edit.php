<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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

<?php if ($msgErreur): ?>
  <div class="alert alert-danger">
      <i class="fas fa-exclamation-triangle"></i>  Veuillez remplir correctement chaque(s) champ(s).
  </div>
<?php endif; ?>

<form method="post">
    <?= $form->input('titre', 'Titre du chapitre'); ?>
    <?= $form->input('contenu', 'Contenu', 'id="text"' ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
<br>
<a class="btn btn-warning back-btn" href="./index.php"><i class="fas fa-arrow-left"></i> Retour</a>
