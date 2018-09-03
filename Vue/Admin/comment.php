<?php $this->titre = "Mon Blog - Administration des commentaires "?>
<div class="header" id="header-perso5">
    <div class="top-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="nav_admin">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAdminMarkup" aria-controls="navbarNavAdminMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAdminMarkup">
                    <div class="sidenav">
                        <a class="nav-item nav-link" id="retour_acceuil" href="Accueil"><i class="fas fa-home"></i>Accueil</a>
                        <a class="nav-item nav-link" href="admin"><i class="fas fa-bars"></i> Tableau de bord</a>
                        <a class="nav-item nav-link" href="./admin/auteur/"><i class="fa fa-address-book"></i> Auteur</a>
                        <a class="nav-item nav-link" href="./admin/billet/"><i class="fas fa-book"></i> Billets</a>
                        <a class="nav-item nav-link" href="./admin/comment/"><i class="far fa-comment"></i> Commentaires</a>
                        <a class="nav-item nav-link" href="connexion/deconnecter"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="allbody">
    <h1 class="title-id" id="comment_title"><i class="far fa-comment"></i> Administrer les commentaires</h1>
    <table class="table">
        <thead>
            <tr>
                <td class="title-id">Source</td>
                <td class="title-id">Pseudo</td>
                <td class="title-id">Commentaire ( <i class="far fa-comment"></i> )</td>
                <td class="title-id">Signalement ( <i class="fa fa-exclamation"></i> )</td>
                <td class="title-id">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php if ($commentaires == null) { ?>
            <tr>
                <th>-</th>
                <th>-</th>
                <th>Aucun commentaire à afficher</th>
                <th>-</th>
            </tr>
            <?php } else { ?>
            <?php foreach ($commentaires as $commentaire):?>
            <td>
                <a href="<?= "billet/detail/" . $this->nettoyer($commentaire->getBillet()->getId()) ?>"><?= $this->nettoyer($commentaire->getBillet()->getTitre()) ?></a>
            </td>
            <td>
                <?= $this->nettoyer($commentaire->getAuteur())  ?>
            </td>
            <td>
                <?php
                $contenu = $commentaire->getContenu();
                if (strlen($contenu)>=30) {
                    $contenu = substr($contenu,0,30) . "..." ;
                }
                echo $contenu;                
                ?>
            </td>
            <td>
                <?php if ($commentaire->getSignal() == 0) : ?>
                    <p> Non </p>
                <?php  else : ?>
                    <p> Oui </p>
                <?php endif; ?>
            </td>
            <td>
                <a class="btn btn-secondary" title ="Voir le commentaire" href="<?="./admin/commentView/" . $this->nettoyer($commentaire->getID()) ?>"><i class="fas fa-eye"></i></a>
                <a href="#" data-toggle="modal" data-target="#myModal" title ="Supprimer le commentaire" class="btn btn-danger" data-com-title="<?=$this->nettoyer($commentaire->getAuteur()) ?>" data-modal-confirm-url="./admin/commentaireSupprimer/<?= $commentaire->getID() ?>"><i class="fas fa-trash"></i> <i class="far fa-comment"></i></a>
                <?php if ($commentaire->getSignal() > 0) : ?>
                <a class="btn btn-secondary" title ="Supprimer le(s) signalement(s)" href="./admin/supprimerSignalement/<?= $commentaire->getID() ?>"><i class="fas fa-trash"></i> <i class="fa fa-exclamation"></i></a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php } ?>
    </tbody>
</table>
</div>
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
            <p>Etes-vous sur de vouloir supprimer le commentaire concerné ?</p>
        </div>
        <div class="modal-footer">
            <a href="" id="btnYes" class="btn btn-default">Oui, je confirme</a>
            <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-secondary">Non, j'annule</a>
        </div>
    </div>
</div>
</div>
<script>
$(function() {
$modal = $('.modal');
$('a.btn-danger').on('click', function(e) {
e.preventDefault();
$modal.find('a#btnYes').attr('href', $(this).data('modalConfirmUrl'));
$modal.find('.modal-body p').text("Êtes-vous sûr de vouloir supprimer le commentaire de " + $(this).data('comTitle'));
$modal.modal("show");
})
});
</script>