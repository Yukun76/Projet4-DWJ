<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Auteur.php';


class ControleurHistoire extends Controleur
{
    private $auteur;

    public function __construct() {
        $this->auteur = new auteur();
    }

    public function index() {
        $auteur = $this->auteur->getAuteur();
        $this->genererVue(array('auteur' => $auteur));
    }

}