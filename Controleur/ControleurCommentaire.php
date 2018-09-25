<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/DAOBillet.php';
require_once 'Modele/DAOCommentaire.php';

/**
 * Contrôleur des actions liées aux billets
 *
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
        if (!$com) {
           return;
        }
        $com->addSignal();
        $retour = $this->commentaire->ajouterUnSignalement($com);
    }
}