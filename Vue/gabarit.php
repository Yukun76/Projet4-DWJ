<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Crimson+Text|Indie+Flower|Lato|Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">
        <link rel="shortcut icon" href="Public/img/favicon.ico" type="image/x-icon">
        <base href="<?= $racineWeb ?>">
        <link rel="stylesheet" href="Public/css/style.css" />
        <script src='Public/js/tinymce/tinymce.min.js'></script>
        <script src="Public/js/jquery.js"></script>
        <title>
            <?= $titre ?>
        </title>
    </head>

    <body>
        <div id="global">        
            <div id="header-perso">
                <div class="top-header">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link" href="accueil"><i class="fas fa-home"></i> Accueil</a>
                                    <a class="nav-item nav-link" href="billet/liste"><i class="fas fa-book"></i> Episodes</a>
                                    <?php
                                        if (!isset($_SESSION['login'])) {
                                            echo '<a class="nav-item nav-link custom-link" href="connexion"> <i class="fas fa-sign-in-alt"></i> Connexion</a>';
                                        } else {
                                            echo '<a class="nav-item nav-link custom-link" href="admin"><i class="fas fa-cogs"></i> Admin</a>'; 
                                        }
                                    ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div id="contenu">
                <?php if (!empty($flash)): ?>
                    <div id="message_flash" class="alert alert-<?= $flash['type'] ?>">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <p><strong><?= ucfirst($flash['type']) ?> !</strong> <?= $flash['message'] ?></p>
                    </div>
                <?php endif; ?>
                <?= $contenu ?>
            </div>
            <!-- #contenu -->
        </div>
        <!-- #global -->
    </body>
    <!-- Footer -->
    <footer class="page-footer font-small blue">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="http://yukun.fr/blog"> Yukun.fr</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="Public/js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</html>

