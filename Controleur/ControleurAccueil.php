<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Billet.php';
require_once 'Modele/histoire.php';
require_once 'Modele/commentaire.php';

class ControleurAccueil extends Controleur {

    private $billet;
    private $histoire;

    public function __construct() {
        $this->billet = new Billet();
        $this->histoire = new Histoire();
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $billets = $this->billet->getBillets();
        $auteur = $this->histoire->auteur();
        $this->genererVue(array('billets' => $billets, 'auteur' => $auteur));
    }

}

