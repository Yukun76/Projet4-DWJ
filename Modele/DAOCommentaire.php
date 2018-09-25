<?php

require_once 'Database.php';
require_once 'Entity/Commentaire.php';
require_once 'Entity/Billet.php';

class DAOCommentaire extends Database {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'SELECT * FROM commentaire'
                . ' where bil_id=?';
        $sth = $this->executerRequete($sql, array($idBillet));
        $result = $sth->fetchAll(); 
        if (!$result) {
        return [];
       }
        foreach ($result as $value) {
        $commentaires[] = new Commentaire($value['com_id'], $value['com_date'], $value['com_auteur'], $value['com_contenu'], $value['signal_count'], $value['bil_id'], $value['is_read']);   
        }   
        return $commentaires;
    }

    public function create($commentaire) {
        $sql = 'INSERT into commentaire SET com_date= :dateCommentaire, com_auteur= :AuteurCommentaire, com_contenu= :contenuCommentaire, bil_id= :id';
        if($commentaire->getDate() === null) {
            $commentaire->setDate(date(DATE_W3C));
        }
        return $this->executerRequete($sql, array(
           'dateCommentaire' => $commentaire->getDate(),
           'AuteurCommentaire' => $commentaire->getAuteur(),
           'contenuCommentaire' => $commentaire->getContenu(),
           'id' => $commentaire->getBilId()
       ));           
    }
    
    /**
     * Renvoie le nombre total de commentaires
     * 
     * @return int Le nombre de commentaires
     */
    public function getNombreCommentaires() {
        $sql = 'SELECT count(*) as nbCommentaires from commentaire';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbCommentaires'];
    }

    //get l'id du commentaire
    public function getCommentaire($idCommentaire) {
        $sql = 'SELECT * FROM commentaire'
            . ' where com_id=:id';
        $sth = $this->executerRequete($sql, array('id' => $idCommentaire));
        $result = $sth->fetch(); 
        if (!$result) {
            return null;
        }
        return new Commentaire($result['com_id'], $result['com_date'], $result['com_auteur'], $result['com_contenu'], $result['bil_id'], $result['signal_count'], $result['is_read']);   
    }


    public function commentaireEditer ($contenu, $idCommentaire) {
        $sql = 'UPDATE commentaire SET com_contenu = :contenu WHERE com_id = :idc';
        $this->executerRequete($sql, array('contenu' => $contenu, 'idc' => $idCommentaire));
    }


    public function commentaireSupprimer($idCommentaire) {
        $sql = 'DELETE FROM commentaire WHERE com_id = :idCommentaire';

        return $this->executerRequete($sql, array(
                'idCommentaire' => $idCommentaire,
            ))->rowCount() == 1;
    }

    //Champs Commentaires Admin
    public function getComments() {
        $sql = 'SELECT * FROM commentaire, billet WHERE billet.bil_id = commentaire.bil_id order by signal_count DESC';
        $sth = $this->executerRequete($sql, array());
        $result = $sth->fetchAll(); 
        if (!$result) {
        return [];
       }
        foreach ($result as $value) {
        $commentaire = new Commentaire($value['com_id'], $value['com_date'], $value['com_auteur'], $value['com_contenu'], $value['bil_id'], $value['signal_count'], $value['bil_titre'], $value['is_read']);
        $billet = new Billet ($value['bil_id'], $value['bil_date'], $value['bil_titre'], $value['bil_num'], $value['bil_contenu']);
        $commentaire->setBillet($billet);
        $commentaires[] = $commentaire;
        }   
        return $commentaires;
    }


    public function ajouterUnSignalement($commentaire) {
        $sql = 'UPDATE commentaire SET signal_count= :signalCount WHERE com_id = :id';
        return $this->executerRequete($sql, array(
            'signalCount' => $commentaire->getSignal(),
            'id' => $commentaire->getId()
        ))->rowCount() == 1;
    }


    public function getNombreSignalements() {
        $sql = 'SELECT count(*) AS nbSignalements FROM commentaire WHERE signal_count  != 0';
        $reponse = $this->executerRequete($sql);
        $ligne = $reponse->fetch();
        return $ligne['nbSignalements'];
    }

    public function supprimerSignalement($id) {
        $sql = 'UPDATE commentaire SET signal_count = 0 WHERE com_id = :id';
        $this->executerRequete($sql, array('id' => $id));
    }

    public function updateIsRead($commentaire) {
        $sql = 'UPDATE commentaire SET is_read= :isRead WHERE com_id= :id';
        return $this->executerRequete($sql, array(
            'isRead' => $commentaire->getIsRead(),
            'id' => $commentaire->getId()
        ))->rowCount() == 1;
    }
}