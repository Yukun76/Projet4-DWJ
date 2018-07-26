<header class="Alaska_banner" id="header-perso2"></header>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="episode_modif">
    <h1 class="page-header"></h1>
    <div class="row placeholders">
        <div id="contenu_modif">
            <h1 class="title-id">Modifier un billet existant</h1>
            <hr>
            <br />
            <div class="col-sm-12 contact-form">
                <form id="modifierBillet" method="post" class="form" role="form">
                    <div class="row">
                        <div class="col-xs-4 col-md-4 form-group">
                            <label>Date</label>
                            <input class="form-control" id="dateBillet" name="dateBillet"
                            placeholder="Entrez la date de ce billet" class= "form-control" type="text" value="<?= $billet['date'] ?>"
                            required autofocus/>
                        </div>
                        <div class="col-xs-4 col-md-4 form-group">
                            <label>Titre</label>
                            <input class="form-control" id="titreBillet" name="titreBillet"
                            placeholder="Entrez votre titre" class= "form-control" type="text" value="<?= $billet['titre'] ?>"
                            required/>
                        </div>
                    </div>
                    <label>Contenu du billet</label>
                    <textarea class="form-control" rows="20" id="tiny" name="contenuBillet" placeholder="Le texte">
                    <?= $billet['contenu'] ?>
                    </textarea>
                    <br/>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <button class="btn btn-primary pull-right" type="submit">Modifier le billet</button>
                        </div>

                    </div>
                    <a href="./admin/Episode/" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Retour</a>
                </form>
                <script>
                    tinymce.init({
                        selector: '#tiny',
                        language: 'fr_FR',
                        width : "100%",
                        extended_valid_elements:"*[*]"
                    });
                </script>
            </div>
        </div>
    </div>
</div>