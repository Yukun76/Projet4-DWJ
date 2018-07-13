<?php
require_once 'Framework\Controleur.php';
require_once 'Modele\Histoire.php';


class ControleurHistoire extends Controleur
{
    private $histoire;

    public function __construct()
    {
        $this->histoire = new histoire();
    }

    public function index()
    {
        $auteur = $this->histoire->auteur();
        $this->genererVue(array('auteur' => $auteur));
    }

}