<?php

require_once 'Modele/Configuration.php';
require_once 'Requete.php';
require_once 'Vue.php';

/**
 * Classe abstraite contrôleur. 
 * Fournit des services communs aux classes contrôleurs dérivées.
 */
abstract class Controleur {

    /** Action à réaliser */
    private $action;

    /** Requête entrante */
    protected $requete;

    /**
     * Définit la requête entrante
     * 
     * @param Requete $requete Requete entrante
     */
    
    public function setRequete(Requete $requete) {
        $this->requete = $requete;
    }

    /**
     * Exécute l'action à réaliser.
     * Appelle la méthode portant le même nom que l'action sur l'objet Controleur courant
     * 
     * @throws Exception Si l'action n'existe pas dans la classe Controleur courante
     */

    public function executerAction($action) {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        }
        else {
            $classeControleur = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe $classeControleur");
        }
    }


    protected function genererVue($donneesVue = array(), $action = null) {
        // Utilisation de l'action actuelle par défaut
        $actionVue = $this->action;
        if ($action != null) {
            // Utilisation de l'action passée en paramètre
            $actionVue = $action;
        }
        // Utilisation du nom du contrôleur actuel
        $classeControleur = get_class($this);
        $controleurVue = str_replace("Controleur", "", $classeControleur);

        // Instanciation et génération de la vue
        $vue = new Vue($actionVue, $controleurVue);
        $vue->generer(array_merge($donneesVue, ['flash' => $this->requete->getSession()->getMessageFlash()]));
    }

    protected function setFlash($type, $message) {
        $this->requete->getSession()->setMessageFlash($type, $message);
    }


    /**
     * Effectue une redirection vers un contrôleur et une action spécifiques
     * 
     * @param string $controleur Contrôleur
     * @param type $action Action Action
     */
    protected function rediriger($controleur, $action = null) {
        $racineWeb = Configuration::get("racineWeb", "/");
        // Redirection vers l'URL /racine_site/controleur/action
        header("Location:" . $racineWeb . $controleur . "/" . $action);
    }

}
