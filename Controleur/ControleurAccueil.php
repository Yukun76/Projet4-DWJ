<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/DAOBillet.php';
require_once 'Modele/DAOAuteur.php';
require_once 'Modele/DAOCommentaire.php';

class ControleurAccueil extends Controleur {

    private $billet;
    private $auteur;

    public function __construct() {
        $this->billet = new DAOBillet();
        $this->auteur = new DAOAuteur();
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $billets = $this->billet->getBillets();        
        $auteur = $this->auteur->getAuteur();
        $this->genererVue(array('billets' => $billets, 'auteur' => $auteur));
    }
}

