<?php
require_once 'Framework/Session.php';
require_once 'Framework/ControleurSecurise.php';
require_once 'Modele/DAOBillet.php';
require_once 'Modele/DAOCommentaire.php';
require_once 'Modele/DAOAuteur.php';


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

    public function __construct() {
        $this->billet = new DAOBillet();
        $this->commentaire = new DAOCommentaire();
        $this->auteur = new DAOAuteur();
    }

    public function index() {
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
        $commentaire = $this->commentaire->getCommentaire($idCommentaire);
        $this->genererVue(array('commentaire' => $commentaire));
    }


    public function commentaireSupprimer() {
        $id = $this->requete->getParametre('id');
        $this->commentaire->commentaireSupprimer($id);
        $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Commentaire supprimé");
        $this->rediriger("admin/comment/");
    }

    public function Billet() {
        $billets = $this->billet->getAllBillet();
        $this->genererVue(array('billets' => $billets));
    }


    public function billetCreer() {
        if  ($this->requete->existeParametre("dateBillet") &&  $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("ordreBillet") && $this->requete->existeParametre("contenuBillet")) {           
            $billetParams = [
                'date'=> $this->requete->getParametre('dateBillet'),
                'titre'=> $this->requete->getParametre('titreBillet'),
                'ordre'=> $this->requete->getParametre('ordreBillet'),
                'contenu'=> $this->requete->getParametre('contenuBillet')
            ]; 
            $billet = new Billet();
            $billet->fromArray($billetParams);      
            $this->billet->billetCreer($billet);
            $this->rediriger("admin/billet/");
        }
        
        $billet = array('title' => "Mon titre", 'description' => '<p>Le contenu de mon article</p>');
        $this->genererVue(array('billet' => $billet));
    }

    public function billetModifier() {
        $id = $this->requete->getParametre('id');
        if ($this->requete->existeParametre("dateBillet") && $this->requete->existeParametre("titreBillet") && $this->requete->existeParametre("ordreBillet") && $this->requete->existeParametre("contenuBillet")) {
            $billetParams = [
                'date'=> $this->requete->getParametre('dateBillet'),
                'titre'=> $this->requete->getParametre('titreBillet'),
                'ordre'=> $this->requete->getParametre('ordreBillet'),
                'contenu'=> $this->requete->getParametre('contenuBillet')
            ]; 
            $billet = new billet();
            $billet->fromArray($billetParams); 
            $this->billet->billetModifier($billet, $id);
            $this->rediriger("admin/billet/");
        }

        $billet = $this->billet->getBillet($id);
        $this->genererVue(array('billet' => $billet));
    }

    public function billetSupprimer() {
        $id = $this->requete->getParametre('id');
        $this->billet->billetSupprimer($id);
        $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Billet supprimé");
        $this->rediriger("admin/billet/");
    }


    public function supprimerSignalement() {
        $id = $this->requete->getParametre('id');
        $this->commentaire->supprimerSignalement($id);
        $this->setFlash(Session::FLASH_TYPE_SUCCESS, "Signalement(s) supprimé(s)");
        $this->rediriger("admin/comment/");
    }


    public function auteur() {
        $auteur = $this->auteur->getAuteur();
        $this->genererVue(array('auteur' => $auteur));
    }


    public function  auteurEditer () {
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

