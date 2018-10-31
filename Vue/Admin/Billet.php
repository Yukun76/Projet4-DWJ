<?php $this->titre = "Mon Blog - Administration des billets "?>
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
    <h1 class="title-id" id="post_title"><i class="fas fa-book"></i> Administrer les billets</h1>
    <p>
        <a href="./admin/billetCreer/" class="btn btn-success" id="btn-success"><i class="fas fa-plus"></i> Ajouter</a>
    </p>
    <table class="table">
        <thead>
            <tr>
                <td class="title-id">Titre</td>
                <td class="title-id">Contenu</td>
                <td class="title-id">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php if ($billets == null) { ?>
            <tr>
                <th>-</th>
                <th>Aucun billet à afficher</th>
                <th>-</th>
            </tr>
            <?php } else { ?>
                <?php foreach ($billets as $billet):?>
                <tr>
                    <td>
                        <?= $this->nettoyer($billet->getTitre()) ?>
                    </td>
                    <td>
                        <?php  
                            $contenu = $billet->getContenu();
                            if (strlen($contenu)>=33) {                
                                $contenu = substr($contenu,0,49) . "..." ;
                            }
                            echo $contenu;            
                        ?>   
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="<?= "billet/detail/" . $this->nettoyer($billet->getId()) ?>"><i class="fas fa-eye"></i>  Afficher</a>
                        <a class="btn btn-primary" href="./admin/billetModifier/<?= $billet->getId() ?>"><i class="fas fa-edit"></i> Editer</a>
                        <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-danger" id="del-billet" data-billet-title="<?= $this->nettoyer($billet->getTitre()) ?>" data-modal-confirm-url="./admin/billetSupprimer/<?= $billet->getId() ?>"><i class="fas fa-trash"></i> Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php } ?>
        </tbody>
    </table>
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
                    <p>Etes-vous sur de vouloir supprimer le billet concerné ?</p>
                </div>
                <div class="modal-footer">
                    <a href="" id="btnYes" class="btn btn-default">Oui, je confirme</a>
                    <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-secondary">Non, j'annule</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $modal = $('.modal');
        $('a.btn-danger').on('click',function(e){
            e.preventDefault();
            $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'));
            $modal.find('.modal-body p').text("Êtes-vous sûr de vouloir supprimer l\'" + $(this).data('billetTitle'));
            $modal.modal("show");
        })
    });
    
    $(document).ready(function(){
        $('a#btnYes').click(function(){
            $('.alert').show()
        })
    });
</script>