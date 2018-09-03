<?php

require_once 'Database.php';
require_once 'Entity/Utilisateur.php';

class DAOUtilisateur extends Database {

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connecter($login, $mdp)
    {
        $sql = "SELECT * FROM t_utilisateur WHERE util_login=? and util_mdp=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        $result = $utilisateur->fetch(); 
            return new Utilisateur($result['util_id'], $result['util_login'], $result['util_mdp']);
        $utilisateur->rowCount() == 1;
    }

    /**
     * Renvoie un utilisateur existant dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUtilisateur($login, $mdp)
    {
        $sql = "SELECT * FROM t_utilisateur WHERE util_login=? and util_mdp=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        $result = $utilisateur->fetch(); 
        if ($utilisateur->rowCount() == 1)
            return new Utilisateur($result['util_id'], $result['util_login'], $result['util_mdp']);  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }
}