<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/DAOBillet.php';
require_once 'Modele/DAOCommentaire.php';

/**
 * Contrôleur des actions liées aux billets
 *
 */
class ControleurAjaxCommentaire extends Controleur {


    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->commentaire = new DAOCommentaire();
    }

    // Affiche les détails sur un billet
    public function index() {
    }

    public function put() { 
    $idCommentaire = $this->requete->getParametre("id");
    $isRead = $this->requete->getParametre("is_read");
    $com = $this->commentaire->getCommentaire($idCommentaire);
    $com->setIsRead($isRead);
    $this->commentaire->updateIsRead($com);
    }
}

