<?php $this->titre = "Mon Blog - Commentaire de " . $this->nettoyer($commentaire->getAuteur()); ?>
<header class="Alaska_banner" id="header-perso2"></header>
<div class="commentaire_view">
	<h1><?= $this->nettoyer($commentaire->getAuteur()); ?></h1>
	<p><em><?= $this->nettoyer($commentaire->getDate()); ?></em></p>
	<h3><?= $this->nettoyer($commentaire->getContenu()); ?></h3><br/>
	<?php if (isset($_SESSION['login'])): ?>
	    <a class="btn btn-warning back-btn" href="./admin/comment"><i class="fa fa-arrow-left"></i> Retour</a>
	<?php endif; ?>
</div> 