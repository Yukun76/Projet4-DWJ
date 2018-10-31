<?php $this->titre = "Mon Blog - Episodes" ?>
<header class="Alaska_banner" id="header-perso2"></header>
<div id="entourage_episode">
    <h1 id="Titre_Episode"> Billet simple pour l'Alaska </h1>
    <?php foreach ($billets as $billet): ?>
        <div class="Episode">
            <article>            
                <header id="all_episode">
                    <a href="<?= "billet/detail/" . $this->nettoyer($billet->getID()) ?>">
                        <h1 class="titreBillet"><?= $this->nettoyer($billet->getTitre()) ?></h1>
                    </a>
                    <img src="Public/img/ChugachMountains.jpg" alt="Mountains" id="Mountains">
                </header>            
            </article>
        </div><br/>
        <hr id="adminHR"><br/>
    <?php endforeach; ?>
</div>

    <div id ="pagination">    
        <?php
            for ($i=1;$i<=$nbPage;$i++) {
                if($i==$cPage) {
                    echo  " $i / ";
                }
                else {
                    echo "<a href=\"admin/comment?p=$i\"> $i </a>/" ;
                }
            }
        ?>
    </div>