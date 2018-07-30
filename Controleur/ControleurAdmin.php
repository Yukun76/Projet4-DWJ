<?php
require_once 'Framework/Session.php';
require_once 'Framework/ControleurSecurise.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
require_once 'Modele\Auteur.php';


/**
 * Contrôleur des actions d'administration
 */
class ControleurAdmin extends ControleurSecurise  {
    private $billet;
    private $commentaire;
    private $auteur;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
        $this->auteur = new Auteur();
    }

    public function index()
    {
        $nbBillets = $this->billet->getNombreBillets();
        $auteur = $this->auteur->getAuteur();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbBillets' => $nbBillets, 'nbCommentaires' => $nbCommentaires, 'auteur' => $auteur, 'login' => $login));
    }

    public function comment() {
        $billets = $this->billet->getAllBillet();
        $commentaires = $this->commentaire->getComments();
        $this->genererVue(array('commentaires' => $commentaires , 'billets' => $billets));
    }

    public function commentView() {
        $idCommentaire = $this->requete->getParametre('id');
        $commentaire = $this->commentaire->commentView($idCommentaire);
        $this->genererVue(array('commentaire' => $commentaire));
    }

    public function Billet() {
        $billets = $this->billet->getAllBillet();
        $this->genererVue(array('billets' => $billets));
    }


    public function auteur() {
        $auteur = $this->auteur->getAuteur();
        $this->genererVue(array('auteur' => $auteur));
    }


    public function billetCreer()
    {
        if ($this->requete->existeParametre("dateBillet") &&  $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("ordreBillet") && $this->requete->existeParametre("contenuBillet")) {
            $dateBillet = $this->requete->getParametre('dateBillet');
             $titreBillet = $this->requete->getParametre('titreBillet');
             $ordreBillet = $this->requete->getParametre('ordreBillet');
            $contenuBillet = $this->requete->getParametre('contenuBillet');            
            $this->billet->BilletCreer($dateBillet, $titreBillet, $ordreBillet, $contenuBillet);
            $this->rediriger("admin/billet/");
        }
        $billet = array('title' => "Mon titre", 'description' => '<p>Le contenu de mon article</p>');
        $this->genererVue(array('billet' => $billet));
    }

    public function billetModifier()
    {
        $id = $this->requete->getParametre('id');
        if ($this->requete->existeParametre("dateBillet") && $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("ordreBillet") && $this->requete->existeParametre("contenuBillet")) {
            $dateBillet = $this->requete->getParametre('dateBillet');
            $titreBillet = $this->requete->getParametre('titreBillet');
            $ordreBillet = $this->requete->getParametre('ordreBillet');
            $contenuBillet = $this->requete->getParametre('contenuBillet');
            $this->billet->billetModifier($id, $dateBillet, $titreBillet, $ordreBillet, $contenuBillet);
            $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Billet modifié");
            $this->rediriger("admin/billet/");

        }

        $billet = $this->billet->getBillet($id);
        $this->genererVue(array('billet' => $billet));
    }

    public function billetSupprimer()
    {
        $id = $this->requete->getParametre('id');
        $this->billet->billetSupprimer($id);
        $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Billet supprimé");
        $this->rediriger("admin/billet/");
    }



    public function commentaireSupprimer()
    {
        $id = $this->requete->getParametre('id');
        $this->commentaire->commentaireSupprimer($id);
        $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Commentaire supprimé");
        $this->rediriger("admin/comment/");
    }

    public function supprimerSignalement()    {
        $id = $this->requete->getParametre('id');
        $this->commentaire->supprimerSignalement($id);
         $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Signalement(s) supprimé(s)");
        $this->rediriger("admin/comment/");
    }


    public function  auteurEditer ()
    {
        $auteur = $this->auteur->getAuteur();
        if ($this->requete->existeParametre("auteurPhoto")) {
            $photo = $this->requete->getParametre('auteurPhoto');
            $titre = $this->requete->getParametre('auteurTitre');
            $texte = $this->requete->getParametre('auteurTexte');
            $auteur = $this->auteur->editerAuteur($photo,$titre, $texte);
            $this->rediriger("admin/auteur/");
        }
        $this->genererVue(array('auteur' => $auteur));
    }


}

