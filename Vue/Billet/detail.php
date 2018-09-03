<?php $this->titre = "Mon Blog - " . $this->nettoyer($billet->getTitre()); ?>
<header class="Alaska_banner" id="header-perso2"></header>
<h1 id="Titre_Episode" class="border-bottom"> Billet simple pour l'Alaska </h1>
<div class="All_billet">
    <article>
        <header>
            <h1 class="titreBillet"><?= $this->nettoyer($billet->getTitre()) ?></h1>
            <time><?= $this->nettoyer($billet->getDate()) ?></time><br />            
        </header>
        <br />
        <p><?= $billet->getContenu() ?></p>

        <?php if (isset($_SESSION['login'])): ?>
            <a class="btn btn-warning back-btn" href="./admin/billet"><i class="fas fa-cog"></i> Panneau d'administration</a>
         <?php endif; ?>

        <hr />
    </article>
    <h3 id="titreReponses">Commentaires <i class="fas fa-comment"></i></h3>
    <div class="Chap_com">

        <?php if ($commentaires == null) { ?>
            <p>Aucun commentaire</p>
        <?php } else { ?>

        <?php foreach ($commentaires as $commentaire): ?>
        <p><strong><em><?= $this->nettoyer($commentaire->getAuteur())  ?> <i class="fas fa-user"></i> - <?= $this->nettoyer($commentaire->getDate()) ?> :  <a id="signal_button" href="#" data-toggle="modal" data-target="#myModal" data-com-title="<?=$this->nettoyer($commentaire->getAuteur()) ?>" data-modal-confirm-url="<?= "commentaire/signaler/" . $this->nettoyer($commentaire->getId()) ?>">Signaler !</a><br/></strong>             
        <?= nl2br(htmlspecialchars($commentaire->getContenu())) ?></p></em>
        <?php endforeach; ?>
    <?php } ?>
    </div>
    <hr />
    <h4>Poster un commentaire</h4>
    <form method="post" action="billet/commenter">
        <input id="auteur" class= "form-control" name="auteur" type="text" placeholder="Votre pseudo"
        required /><br />
        <span id="caracteres">400</span> caractères restants
        <textarea maxlength="400" onkeyup="reste(this.value);" id="txtCommentaire" class= "form-control" name="contenu" rows="4"
        placeholder="Votre commentaire" required></textarea><br />
        <input type="hidden" name="id" value="<?= $billet->getId() ?>" />
        <button class="btn btn-primary">Envoyer</button>
    </form>
</div><br />

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3>Demande de confirmation</h3>
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
            </div>
            <div class="modal-body">
                <p>Etes-vous sur de vouloir signaler le commentaire concerné ?</p>
            </div>
            <div class="modal-footer">
                <a href="" id="btnYes" class="btn btn-default">Oui</a>
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-secondary">Non</a>
            </div>
        </div>
    </div>
</div>

<script>
     $(function() {
        $modal = $('.modal');
        $('a#signal_button').on('click', function(e) {
            e.preventDefault();
            $modal.find('a#btnYes').attr('href', $(this).data('modalConfirmUrl'));
            $modal.find('.modal-body p').text("Êtes-vous sûr de vouloir signaler le commentaire de " + $(this).data('comTitle'));
            $modal.modal("show");
        })
    });

 $("a#btnYes").click(function(){
    $("#signal_button").css("display" , "none");
});

</script>

<script type="text/javascript">
function reste(texte)
{
    var restants=400-texte.length;
    document.getElementById('caracteres').innerHTML=restants;
}
</script>