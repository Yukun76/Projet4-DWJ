<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/DAOBillet.php';
require_once 'Modele/DAOCommentaire.php';

/**
 * Contrôleur des actions liées aux billets
 *
 * @author Baptiste Pesquet
 */
class ControleurCommentaire extends Controleur {


    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->commentaire = new DAOCommentaire();
    }

    // Affiche les détails sur un billet
    public function index() {
        $this->genererVue();
    }

    // Signalement
    public function signaler() {
        $idCommentaire = $this->requete->getParametre("id");
        $com = $this->commentaire->getCommentaire($idCommentaire);
        $this->commentaire->ajouterUnSignalement($idCommentaire);
        $this->rediriger("billet","detail/" . $com->getBilId());
    }
}

