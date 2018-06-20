<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
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
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un billet
    public function index() {
        $idBillet = $this->requete->getParametre("id");
        
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        
        $this->genererVue(array('billet' => $billet, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire sur un billet
    public function commenter() {
        $idBillet = $this->requete->getParametre("id");
        $auteur = $this->requete->getParametre("auteur");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }

      
     // Signale un comment
    public function reportComment()
    {
        if (!isset($_SESSION['report'])) {
            $_SESSION['report'] = [];
        }
        // Limite le reporting à 5 par session et 1 par commentaire
        if (count($_SESSION['report']) < 5 && !in_array($_GET['id'], $_SESSION['report'])) {
            $countObject = $this->Comment->findCount($_GET['id']);
        
            $count = (int)$countObject->signal_count;
            $result = $this->Comment->update($_GET['id'], ['signal_count' => $count + 1]);
            if ($result) {
                array_push($_SESSION['report'], $_GET['id']);
            }
        } else {
            // Ne rien faire
        }        
        header('Location: index.php?p=Billet.index&id=' . $_GET['id']);
    }
}

