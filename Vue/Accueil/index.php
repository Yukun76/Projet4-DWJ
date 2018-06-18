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
                    <h3>Jean Forteroche, écrivain de roman d'aventure.</h3>
                    <p>" Né en 1961 à Paris. Après une carrière réussie en tant que vice-président International dans des grands groupes informatiques, j’ai décidé de poser mes valises pour me consacrer à l’écriture, ma passion depuis toujours. Mon goût de la lecture, acquis dès le plus jeune âge, ne m’a jamais quitté. Lecteur compulsif, j’ai d’abord dévoré les Jules Verne, puis des auteurs tels que Connelly, Mankel, Deon Meyer, Grisham, Kellermann, ou encore Adler-Holsen ou Indridasson. "</p>
                    <p></p>
                    <p>- Jean Forteroche -</p>
                </div>
            </div>
            <div id="last_chap">
                <h2>Derniers chapitres</h2>
            </div>
        </div>
        <?php $this->titre = "Mon Blog"; ?>
        <?php foreach ($billets as $billet):
        ?>
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
                $billet['contenu']=substr($billet['contenu'],0,100) . "..." ;
                }
                
                echo $billet['contenu'];
                
                ?>
                <hr>
                
            </article>
        </div>
        <hr />
        <?php endforeach; ?>