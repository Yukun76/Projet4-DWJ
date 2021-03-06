<?php $this->titre = "Mon Blog - Ajouter un nouveau billet" ?>
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
        <div id="contenu_form">
            <h1 class="title-id">Création d'un nouveau billet</h1>
            <hr><br />
            <form method="post" class="crud-box">
                <div class="row">
                    <div class="col-xs-4 col-md-4 form-group">
                        <label>Date (AAAA-MM-DD)</label><br>
                        <input name="dateBillet" class= "form-control"  placeholder="Entrez la date du billet"
                        required>
                    </div>
                    <div class="col-xs-4 col-md-4 form-group">
                        <label>Titre du billet</label><br>
                        <input name="titreBillet" class= "form-control"  placeholder="Entrez le titre" required>
                    </div>
                    <div class="col-xs-4 col-md-4 form-group">
                        <label>Ordre d'affichage (ex: 1,2..)</label><br>
                        <input name="ordreBillet" class="form-control"  placeholder="Ordre d'affichage" required/>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 form-group">
                    <label>Texte</label>
                    <textarea rows="20" id="tiny" name="contenuBillet" placeholder="Le texte"></textarea>
                </div>
                <button class="btn btn-success" id="btn_newbillet"type="submit">Ajouter le nouveau billet</button><br/><br/>
                <a href="./admin/billet/" id="btn_newbillet" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Retour</a>
            </form>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: '#tiny',
        language: 'fr_FR',
        extended_valid_elements:"*[*]"
    });
</script>