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
                        <a class="nav-item nav-link" href="./admin/histoire/"><i class="fa fa-address-book"></i> Histoire</a>
                        <a class="nav-item nav-link" href="./admin/Episode/"><i class="fas fa-book"></i> Episodes</a>
                        <a class="nav-item nav-link" href="./admin/comment/"><i class="far fa-comment"></i> Commentaires</a>
                        <a class="nav-item nav-link" href="connexion/deconnecter"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="allbody">
    <h1 class="title-id" id="Histoire_title"><i class="fa fa-address-book"></i> Administrer l'histoire "A propos"'</h1>
    <table class="table">
        <thead>
            <tr>
                <td class="title-id">Photo</td>
                <td class="title-id">Titre</td>
                <td class="title-id">Contenu</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img alt="User Pic"
                    src="vue/img/<?= $this->nettoyer($auteur['photo']) ?>"
                    class="img-thumbnail img-responsive" id="photo_afficher">
                </td>
                <td>
                    <?= $this->nettoyer($auteur['titre']) ?>
                </td>
                <td>
                    <?= $auteur['texte'] ?>
                </td>
                <td><a class="btn btn-primary" href="./admin/histoireEditer/"><i class="fas fa-edit"></i> Editer</a></td>
            </tr>
        </tbody>
    </table>
</div>