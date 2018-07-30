<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Auteur.php';
require_once 'Modele/commentaire.php';

class ControleurAccueil extends Controleur {

    private $billet;
    private $auteur;

    public function __construct() {
        $this->billet = new Billet();
        $this->auteur = new Auteur();
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $billets = $this->billet->getBillets();
        $auteur = $this->auteur->getAuteur();
        $this->genererVue(array('billets' => $billets, 'auteur' => $auteur));
    }

}

