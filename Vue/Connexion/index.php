<?php $this->titre = "Mon Blog - Connexion"; ?>
<header class="header banner" id="header-perso3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href=""><img src="Public/img/logo.png" alt="Jean ForteRoche" id="logo2"></a>
            </div>
        </div>
    </div>
</header>

<div id="form_connexion">
    <h1 class="title-id">Connexion</h1>
    <p>Vous devez être connecté pour accéder à cette zone.</p>
    <form action="connexion/connecter" method="post">
        <input name="login" type="text" class= "form-control" placeholder="Entrez votre login" required autofocus><br />
        <input name="mdp" type="password" class= "form-control" placeholder="Entrez votre mot de passe" required><br />
        <button class="btn btn-primary">Se connecter</button>
    </form>
</div>
<?php if (isset($msgErreur)): ?>
<p><?= $msgErreur ?></p>

<?php endif; ?>