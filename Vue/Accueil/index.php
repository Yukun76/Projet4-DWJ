<header class="header banner" id="header-perso">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href=""><img src="vue/img/logo.png" alt="Jean ForteRoche" id="logo"></a>
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
                    <img src="vue/img/photojean.jpg" alt="Jean ForteRoche" id="jean">
                </div>
                <div class="col-sm-9">
                    <h3><span><?= $this->nettoyer($auteur['titre']) ?></span></h3><br>
                    <p><?= nl2br($auteur['texte']) ?></p>
                </div>
            </div>
            <div id="last_chap">
                <h2>Derniers Episodes</h2>
            </div>
        </div>
        <?php $this->titre = "Mon Blog"; ?>
        <?php foreach ($billets as $billet):?>
        <div class="Chapitre">
            <article>
                <header>
                    <hr>
                    <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
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
                <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">Lire la suite</a>
                <hr>
                
            </article>
        </div>
        <hr />
        <?php endforeach; ?>