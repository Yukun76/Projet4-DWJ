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
                    src="Public/img/<?= $this->nettoyer($auteur->getPhoto()) ?>"
                    id="jean" class="img-thumbnail img-responsive"></img>
                </div>
                <div class="col-sm-9">
                    <h3><span><?= $this->nettoyer($auteur->getTitre()) ?></span></h3>
                    <p><?= nl2br($auteur->getTexte()) ?></p>
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
                <a href="<?= "billet/detail/" . $this->nettoyer($billet->getId()) ?>">
                    <h1 class="titreBillet"><?= $this->nettoyer($billet->getTitre()) ?></h1>
                </a>
                <time><?= $this->nettoyer($billet->getDate()) ?></time>
            </header>

            <?php  
            $contenu = $billet->getContenu();
            if (strlen($contenu)>=150) {                
                $contenu = substr($contenu,0,108) . "..." ;
            }   

            echo $contenu;
            
            ?>   

            <a href="<?= "billet/detail/" . $this->nettoyer($billet->getId()) ?>">Lire la suite</a>
            <hr>
            <br />            
        </article>
        <?php endforeach; ?>
    </div>
</div>