<?php

require_once 'Controleur.php';
require_once 'Requete.php';
require_once 'Vue.php';

/**
 * Classe de routage des requêtes entrantes.
 */
class Routeur {
    
    private $requete;
    
    /**
     * Méthode principale appelée par le contrôleur frontal
     * Examine la requête et exécute l'action appropriée
     */
    public function routerRequete() {
        try {
            // Fusion des paramètres GET et POST de la requête
            // Permet de gérer uniformément ces deux types de requête HTTP
            $this->requete = new Requete(array_merge($_GET, $_POST));

            $controleur = $this->creerControleur($this->requete);
            $action = $this->getAction($this->requete);
            $controleur->executerAction($action);
        }
        catch (Exception $e) {
            $this->gererErreur($e);
        }
    }

    /**
     * Instancie le contrôleur approprié en fonction de la requête reçue
     * 
     * @param Requete $requete Requête reçue
     * @return Instance d'un contrôleur
     * @throws Exception Si la création du contrôleur échoue
     */
    private function creerControleur(Requete $requete) {
        // Grâce à la redirection, toutes les URL entrantes sont du type :
        // index.php?controleur=XXX&action=YYY&id=ZZZ

        $controleur = "Accueil";  // Contrôleur par défaut
        if ($requete->existeParametre('controleur')) {
            $controleur = $requete->getParametre('controleur');
            // Première lettre en majuscules
            $controleur = ucfirst(strtolower($controleur));
        }
        // Création du nom du fichier du contrôleur
        // La convention de nommage des fichiers controleurs est : Controleur/Controleur<$controleur>.php

        // créer nom du controleur
        $classeControleur = "Controleur" . $controleur; 

        // créer le chemin du fichier controleur
        $fichierControleur = "Controleur/" . $classeControleur . ".php";

        // test si le fichier existe
        if (file_exists($fichierControleur)) { 
            // Instanciation du contrôleur adapté à la requête

            // on inclut le fichier
            require($fichierControleur); 

            // on créer une instance du controleur : ex : new controleurAdmin
            $controleur = new $classeControleur();

            // On lui passe l'objet requete.
            $controleur->setRequete($requete);
            return $controleur;
        }
        else {
            throw new Exception("Fichier '$fichierControleur' introuvable");
        }
    }

    /**
     * Détermine l'action à exécuter en fonction de la requête reçue
     * 
     * @param Requete $requete Requête reçue
     * @return string Action à exécuter
     */
    private function getAction(Requete $requete) {
        $action = "index";  // Action par défaut
        if ($requete->existeParametre('action')) {
            $action = $requete->getParametre('action');
        }
        return $action;
    }

    /**
     * Gère une erreur d'exécution (exception)
     * 
     * @param Exception $exception Exception qui s'est produite
     */
    private function gererErreur(Exception $exception) {
        $vue = new Vue('erreur');
        $donnees = ['msgErreur' => $exception->getMessage(), 'flash' => $this->requete->getSession()->getMessageFlash()];
        $vue->generer($donnees);
    }
}
