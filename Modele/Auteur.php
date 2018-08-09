<?php

require_once 'Database.php';

class Auteur extends Database {

    public function getAuteur () {
        $sql = 'SELECT auteur_photo AS photo, auteur_titre AS titre, auteur_texte AS texte FROM t_auteur';
        $photo = $this->executerRequete($sql, array());
        return $photo->fetch();
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