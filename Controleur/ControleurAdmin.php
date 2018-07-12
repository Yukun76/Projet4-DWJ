<?php
require_once 'Framework/ControleurSecurise.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';


/**
 * Contrôleur des actions d'administration
 */
class ControleurAdmin extends ControleurSecurise  {
    private $billet;
    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }

    public function index()
    {
        $nbBillets = $this->billet->getNombreBillets();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbBillets' => $nbBillets, 'nbCommentaires' => $nbCommentaires, 'login' => $login));
    }

    public function comment() {
        $billets = $this->billet->getEpisode();
        $commentaires = $this->commentaire->getComments();
        $this->genererVue(array('commentaires' => $commentaires , 'billets' => $billets));
    }

    public function Episode() {
        $billets = $this->billet->getEpisode();
        $this->genererVue(array('billets' => $billets));
    }


    public function billetCreer()
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

    public function billetModifier()
    {
        $id = $this->requete->getParametre('id');
        if ($this->requete->existeParametre("dateBillet") && $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("contenuBillet")) {
            $dateBillet = $this->requete->getParametre('dateBillet');
            $titreBillet = $this->requete->getParametre('titreBillet');
            $contenuBillet = $this->requete->getParametre('contenuBillet');
            $this->billet->billetModifier($id, $dateBillet, $titreBillet, $contenuBillet);
            $this->rediriger("admin/Episode/");
        }

        $billet = $this->billet->getBillet($id);
        $this->genererVue(array('billet' => $billet));
    }

    public function billetSupprimer()
    {
        $id = $this->requete->getParametre('id');
        $this->billet->billetSupprimer($id);
        //$this->setFlash(Session::FLASH_TYPE_SUCCESS, "Billet supprimé");
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
       // $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Commentaire supprimé");
        $this->rediriger("admin/comment/");
    }

    public function supprimerSignalement()    {
        $id = $this->requete->getParametre('id');
        $this->commentaire->supprimerSignalement($id);
        //$this->setFlash(Session::FLASH_TYPE_SUCCESS, "Signalement(s) supprimé(s)");
        $this->rediriger("admin/comment/");
    }
}

