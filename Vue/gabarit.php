<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Crimson+Text|Indie+Flower|Lato|Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <base href="<?= $racineWeb ?>">
    <link rel="stylesheet" href="Contenu/style.css" />
        <script src='Contenu/js/tinymce/tinymce.min.js'></script>
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
                                <a class="nav-item nav-link" href="index.php"><i class="fas fa-home"></i> Accueil</a>
                                <a class="nav-item nav-link" href="Episode"><i class="fas fa-book"></i> Episodes</a>
                                <?php
                                        if (!isset($_SESSION['login'])) {
                                        echo '<a class="nav-item nav-link custom-link" href="connexion"> <i class="fas fa-sign-in-alt"></i> Connexion</a>';
                                        } else {
                                        echo '<a class="nav-item nav-link custom-link" href="admin"><i class="fas fa-cogs"></i> Admin</a>'; } ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div id="contenu">
            <?= $contenu ?>
        </div>
        <!-- #contenu -->
    </div>
    <!-- #global -->
    <footer id="piedBlog">
        Yukun©2018 Tous droits réservés.
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>

</html>
