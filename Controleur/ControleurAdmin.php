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

    /**
     * Ajoute un post
    */
    public function add()
    {

    }

    /**
     * Modifie un post
    */
    public function edit()
    {

    }

    /**
     * Supprime un post
     */
    public function delete()
    {
    }
}

