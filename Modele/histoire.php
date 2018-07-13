<?php

require_once 'Framework/Modele.php';

class histoire extends Modele {

    public function auteur () {
        $sql = 'SELECT histoire_photo AS photo, histoire_titre AS titre, histoire_texte AS texte FROM T_HISTOIRE';
        $photo = $this->executerRequete($sql, array());
        return $photo->fetch();
    }

    public function editerAuteur ($photo, $titre, $texte) {
            $sql = 'UPDATE T_HISTOIRE SET histoire_photo= :photo, histoire_titre= :titre, histoire_texte = :texte';
            return $this->executerRequete($sql, array(
                    'photo' => $photo,
                    'titre' => $titre,
                    'texte' => $texte,
                ))->rowCount() == 1;
    }
}