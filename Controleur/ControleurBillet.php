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
            $billetId,
            null,            
            null);
        $this->commentaire->create($commentaire);
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("detail");
    }

    public function liste() {
        $perPage = 3;
        $nbBillets = $this->billet->getNombreBillets();
        $nbPage = ceil($nbBillets/$perPage);

        if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbPage) {
            $cPage = $_GET['p'];
        }
        else {
            $cPage =1;
        }

        $offset = (($cPage-1)*$perPage);
        $billets = $this->billet->getAllBillet($offset, $perPage);
        $this->genererVue(array('billets' => $billets, 'nbPage' => $nbPage, 'cPage' => $cPage));
    }
}
