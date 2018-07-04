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
        <td class="title-id">Commentaire</td>
        <td class="title-id">Signalement</td>
        <td class="title-id">Actions</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($commentaires as $commentaire):?>
      <tr>        
        <td><?= $this->nettoyer($commentaire['id']) ?></td>
        <td><?= $this->nettoyer($commentaire['auteur'])  ?></td>
        <td>
          <?php
          if(strlen($commentaire['contenu'])>=33)
          {
          $commentaire['contenu']=substr($commentaire['contenu'],0,46) . "..." ;
          }
          echo htmlspecialchars($commentaire['contenu']);
          ?>
        </td>
        <td><?= $this->nettoyer($commentaire['SIGNAL_COUNT']) ?></td>
        <td>
          <a class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>