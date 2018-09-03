<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/DAOBillet.php';
require_once 'Modele/DAOCommentaire.php';
/**
 * Contrôleur des actions liées aux billets
 */
class ControleurBillet extends Controleur {

    private $billet;
    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->billet = new DAOBillet();
        $this->commentaire = new DAOCommentaire();
    }

    // Affiche les détails sur un billet

    public function detail() {
        $idBillet = $this->requete->getParametre("id");        
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);        
        $this->genererVue(array('billet' => $billet, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire sur un billet
    public function commenter() {
        $billetId = $this->requete->getParametre("id");
        $auteur = $this->requete->getParametre("auteur");
        $contenu = $this->requete->getParametre("contenu");
        $commentaire = new Commentaire(
            null,
            null,
            $auteur,
            $contenu,
            null,
            $billetId,
            null);
        $this->commentaire->create($commentaire);
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("detail");
    }

    public function liste() {
        $billets = $this->billet->getAllBillet();
        $this->genererVue(array('billets' => $billets));
    }
}
