<?php $this->titre = "Mon Blog - Episodes" ?>
<header class="Alaska_banner" id="header-perso2">
</header>

<div id="entourage_episode">
<h1 id="Titre_Episode"> Billet simple pour l'Alaska </h1>

<?php $this->titre = "Mon Blog"; ?>
<?php foreach ($billets as $billet):
?>
<div class="Chapitre">
    <article>
        <header id="all_episode">
            <hr class="HR_EPISODE">
            <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
            </a>
            <time><?= $this->nettoyer($billet['date']) ?></time>
        </header>
        <hr class="HR_EPISODE">     
    </article>
</div>
<br/>
<?php endforeach; ?>
</div>