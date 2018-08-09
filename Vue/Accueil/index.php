<?php $this->titre = "Jean ForteRoche : Blog"; ?>
<header class="header banner" id="header-perso">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href=""><img src="Public/img/logo.png" alt="Jean ForteRoche" id="logo"></a>
                <p id="logo_text"> Bienvenue sur le blog, en vous souhaitant une agréable lecture.</p>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-8 mt-4">
            <h2 class="test center" id="who-title">A Propos</h2>
            <div class="row">
                <div class="col-sm-3">
                    <img alt="User Pic"
                    src="Public/img/<?= $this->nettoyer($auteur['photo']) ?>"
                    id="jean" class="img-thumbnail img-responsive"></img>
                </div>
                <div class="col-sm-9">
                    <h3><span><?= $this->nettoyer($auteur['titre']) ?></span></h3>
                    <p><?= nl2br($auteur['texte']) ?></p>
                    <?php if (isset($_SESSION['login'])): ?>
                    <a id="Propos_edit" href="./admin/auteurEditer/"><i class="fas fa-cog"></i>Editer</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="Chapitre">
        <div id="last_chap">
            <h2>Derniers Episodes</h2>
        </div>
        <?php foreach ($billets as $billet):?>
        <article>
            <header>
                <hr>
                <a href="<?= "billet/detail/" . $this->nettoyer($billet['id']) ?>">
                    <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
                </a>
                <time><?= $this->nettoyer($billet['date']) ?></time>
            </header>
            <?php
            
            if(strlen($billet['contenu'])>=33)
            {
            $billet['contenu']=substr($billet['contenu'],0,108) . "..." ;
            }
            
            echo $billet['contenu'];
            
            ?>
            <a href="<?= "billet/detail/" . $this->nettoyer($billet['id']) ?>">Lire la suite</a>
            <hr>
            <br />
            
        </article>
        <?php endforeach; ?>
    </div>
</div>