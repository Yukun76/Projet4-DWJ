<?php

require_once 'Database.php';
require_once 'Entity/Auteur.php';

class DAOAuteur extends Database {

    public function getAuteur () {
        $sql = 'SELECT * FROM t_auteur';
        $photo = $this->executerRequete($sql, array());
        $result = $photo->fetch();
        return new Auteur($result['auteur_photo'], $result['auteur_titre'], $result['auteur_texte']);
    }

    public function editerAuteur ($photo, $titre, $texte) {
            $sql = 'UPDATE t_auteur SET auteur_photo= :photo, auteur_titre= :titre, auteur_texte = :texte';
            return $this->executerRequete($sql, array(
                    'photo' => $photo,
                    'titre' => $titre,
                    'texte' => $texte,
                ))->rowCount() == 1;
    }
}
