        <header class="Alaska_banner" id="header-perso2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p id="Alaska_text"> Billet simple pour l'Alaska.</p>
                    </div>
                </div>
            </div>
        </header>

<?php $this->titre = "Mon Blog - " . $this->nettoyer($billet['titre']); ?>

<div class="All_billet">
<article>
    <header>          
        <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
        <time><?= $this->nettoyer($billet['date']) ?></time>
    </header>
    <br />
    <p><?= $this->nettoyer($billet['contenu']) ?></p>
</article>
<hr />
<header>
    <h2 id="titreReponses">Commentaires <i class="fas fa-comment"></i></h2>
</header>
<div class="Chap_com">
<?php foreach ($commentaires as $commentaire): ?>
    <p><em><?= $this->nettoyer($commentaire['auteur'])  ?> <i class="fas fa-user"></i> - <?= $this->nettoyer($commentaire['date']) ?> :<br/>
    <?= nl2br($commentaire['contenu']) ?></p></em>
<?php endforeach; ?>
</div>
<hr />
<h4>Poster un commentaire</h4>
<form method="post" action="billet/commenter">
    <input id="auteur" class= "form-control" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" class= "form-control" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <button class="btn btn-primary">Envoyer</button>
</form>
</div>

