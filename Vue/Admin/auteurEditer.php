<header class="header banner" id="header-perso3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href=""><img src="Public/img/logo.png" alt="Jean ForteRoche" id="logo2"></a>
            </div>
        </div>
    </div>
</header>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"></h1>
    <div class="row placeholders">
        <div id="contenu_histoire">
            <h1 class="title-id">Editer la section "A propos"</h1>
            <hr>
            <br />
            <div class="col-sm-12 contact-form">
                <form id="histoireEditer" method="post" class="form" role="form">
                    <div class="row">
                        <div class="col-xs-4 col-md-4 form-group">
                            <label>Photo</label>
                            <input class="form-control" id="auteurPhoto" name="auteurPhoto"
                            placeholder="Editer le nom exacte de la photo" type="text" value="<?= $auteur['photo'] ?>"
                            required autofocus/>
                        </div>
                        <div class="col-xs-4 col-md-4 form-group">
                            <label>Titre</label>
                            <input class="form-control" id="auteurTitre" name="auteurTitre"
                            placeholder="Editer votre titre" type="text" value="<?= $auteur['titre'] ?>"
                            required/>
                        </div>
                    </div>
                    <label>Edition de l'histoire</label>
                    <textarea class="form-control" rows="20" id="tiny" name="auteurTexte" placeholder="Le texte">
                    <?= $auteur['texte'] ?>
                    </textarea>
                    <br/>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <button class="btn btn-primary pull-right" type="submit">Modifier l'histoire</button>
                        </div>
                    </div>
                    <a href="./admin/auteur/" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Retour</a>
                </form>
                <script>
                tinymce.init({
                selector: '#tiny',
                language: 'fr_FR',
                width : "100%"
                });
                </script>
            </div>
        </div>
    </div>
</div>