<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Crimson+Text|Indie+Flower|Lato|Roboto|Roboto+Slab|Ubuntu"
            rel="stylesheet">
            <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
            <base href="<?= $racineWeb ?>" >
            <link rel="stylesheet" href="Contenu/style.css" />
            <title><?= $titre ?></title>
        </head>
        <body>
            <div id="global">
                <header class="header banner" id="header-perso">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href=""><img src="vue/img/logo.png" alt="Jean ForteRoche" id="logo"></a>
                                <p id="logo_text"> Bienvenue sur le blog, en vous souhaitant une agréable lecture.</p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 mt-4">
                            <h2 class="test center" id="who-title">A Propos</h2>
                            <div class="row">
                                <div class= "col-sm-3">
                                    <img src="vue/img/photojean.jpg" alt="Jean ForteRoche" id="jean">
                                </div>
                                <div class= "col-sm-9">
                                    <h3>Jean Forteroche, écrivain de roman d'aventure.</h3>
                                    <p>" Né en 1961 à Paris. Après une carrière réussie en tant que vice-président International dans des grands groupes informatiques, j’ai décidé de poser mes valises pour me consacrer à l’écriture, ma passion depuis toujours. Mon goût de la lecture, acquis dès le plus jeune âge, ne m’a jamais quitté. Lecteur compulsif, j’ai d’abord dévoré les Jules Verne, puis des auteurs tels que Connelly, Mankel, Deon Meyer, Grisham, Kellermann, ou encore Adler-Holsen ou Indridasson. "</p>
                                    <p></p>
                                    <p>- Jean Forteroche -</p>
                                </div>
                            </div>
                        </div>
                        <div id="contenu">
                            <h2>Derniers chapitres</h2>
                            <?= $contenu ?>
                            </div> <!-- #contenu -->
                            </div> <!-- #global -->
                            <footer id="piedBlog">
                                Yukun©2018 Tous droits réservés.
                            </footer>
                        </body>
                    </html>