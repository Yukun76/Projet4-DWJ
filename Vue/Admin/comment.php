<div class="header" id="header-perso">
    <div class="top-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="sidenav">
                        <a class="nav-item nav-link" href="admin"><i class="fas fa-bars"></i> Tableau de bord</a>
                        <a class="nav-item nav-link" href="./admin/histoire/"><i class="fa fa-address-book"></i> Histoire</a>
                        <a class="nav-item nav-link" href="./admin/episode/"><i class="fas fa-book"></i> Episodes</a>
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
                <a href="<?= "billet/index/" . $this->nettoyer($commentaire['id']) ?>"><?= $this->nettoyer($commentaire['titre']) ?></a>
            </td>
            <td>
                <?= $this->nettoyer($commentaire['auteur'])  ?>
            </td>
            <td>
                <?php
                if(strlen($commentaire['contenu'])>=33)
                {
                $commentaire['contenu']=substr($commentaire['contenu'],0,46) . "..." ;
                }
                echo htmlspecialchars($commentaire['contenu']);
                ?>
            </td>
            <td>
                <?= $this->nettoyer($commentaire['signalement']) ?>
            </td>
            <td>
                <a class="btn btn-secondary" href="<?="./admin/commentView/" . $this->nettoyer($commentaire['idc']) ?>"><i class="fas fa-eye"></i></a> 
                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-danger" data-com-title="<?=$this->nettoyer($commentaire['auteur']) ?>" data-modal-confirm-url="./admin/commentaireSupprimer/<?= $commentaire['idc'] ?>"><i class="fas fa-trash"></i> <i class="far fa-comment"></i></a>
                <?php if ($commentaire['signalement'] > 0) : ?>
                <a class="btn btn-secondary" href="./admin/supprimerSignalement/<?= $commentaire['idc'] ?>"><i class="fas fa-trash"></i> <i class="fa fa-exclamation"></i></a>
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

