<?php
require_once 'Framework/ControleurSecurise.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
require_once 'Modele/histoire.php';


/**
 * Contrôleur des actions d'administration
 */
class ControleurAdmin extends ControleurSecurise  {
    private $billet;
    private $commentaire;
    private $histoire;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
        $this->histoire = new Histoire();
    }

    public function index()
    {
        $nbBillets = $this->billet->getNombreBillets();
        $auteur = $this->histoire->auteur();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbBillets' => $nbBillets, 'nbCommentaires' => $nbCommentaires, 'auteur' => $auteur, 'login' => $login));
    }

    public function comment() {
        $billets = $this->billet->getEpisode();
        $commentaires = $this->commentaire->getComments();
        $this->genererVue(array('commentaires' => $commentaires , 'billets' => $billets));
    }

    public function commentView() {
        $idCommentaire = $this->requete->getParametre('id');
        $commentaire = $this->commentaire->commentView($idCommentaire);
        $this->genererVue(array('commentaire' => $commentaire));
    }

    public function Episode() {
        $billets = $this->billet->getEpisode();
        $this->genererVue(array('billets' => $billets));
    }


    public function histoire() {
        $auteur = $this->histoire->auteur();
        $this->genererVue(array('auteur' => $auteur));
    }


    public function episodeCreer()
    {
        if ($this->requete->existeParametre("dateBillet") && $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("contenuBillet")) {
            $dateBillet = $this->requete->getParametre('dateBillet');
            $titreBillet = $this->requete->getParametre('titreBillet');
            $contenuBillet = $this->requete->getParametre('contenuBillet');
            $this->billet->BilletCreer($dateBillet, $titreBillet, $contenuBillet);
            $this->rediriger("admin/Episode/");
        }
        $billet = array('title' => "Mon titre", 'description' => '<p>Le contenu de mon article</p>');
        $this->genererVue(array('billet' => $billet));
    }

    public function episodeModifier()
    {
        $id = $this->requete->getParametre('id');
        if ($this->requete->existeParametre("dateBillet") && $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("contenuBillet")) {
            $dateBillet = $this->requete->getParametre('dateBillet');
            $titreBillet = $this->requete->getParametre('titreBillet');
            $contenuBillet = $this->requete->getParametre('contenuBillet');
            $this->billet->billetModifier($id, $dateBillet, $titreBillet, $contenuBillet);
            $this->rediriger("admin/Episode/");
            $this->Flash->success('C\'était un succès');
        }

        $billet = $this->billet->getBillet($id);
        $this->genererVue(array('billet' => $billet));
    }

    public function episodeSupprimer()
    {
        $id = $this->requete->getParametre('id');
        $this->billet->billetSupprimer($id);
        $this->rediriger("admin/Episode/");
    }

        public function commentaireEditer()
    {
        $this->needModeratorRole();
        $id = $this->requete->getParametre('id');
        if ($this->requete->existeParametre("contenuCommentaire")) {
            $contenuCommentaire = $this->requete->getParametre('contenuCommentaire');
            $this->commentaire->commentaireEditer($contenuCommentaire, $id);
            $this->rediriger("admin/comment/");
        }
        $commmentaire = $this->commentaire->getCommentaire($id);
        $this->genererVueAdmin(array('commentaire' => $commmentaire));

    }

    public function commentaireSupprimer()
    {
        $id = $this->requete->getParametre('id');
        $this->commentaire->commentaireSupprimer($id);
        $this->rediriger("admin/comment/");
    }

    public function supprimerSignalement()    {
        $id = $this->requete->getParametre('id');
        $this->commentaire->supprimerSignalement($id);
        $this->rediriger("admin/comment/");
    }


    public function  histoireEditer ()
    {
        $auteur = $this->histoire->auteur();
        if ($this->requete->existeParametre("histoirePhoto")) {
            $photo = $this->requete->getParametre('histoirePhoto');
            $titre = $this->requete->getParametre('histoireTitre');
            $texte = $this->requete->getParametre('histoireTexte');
            $auteur = $this->histoire->editerAuteur($photo,$titre, $texte);
            $this->rediriger("admin/histoire/");
        }
        $this->genererVue(array('auteur' => $auteur));
    }


}

