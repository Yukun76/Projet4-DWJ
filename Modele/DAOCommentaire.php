<?php

require_once 'Database.php';
require_once 'Entity/Commentaire.php';
require_once 'Entity/Billet.php';

class DAOCommentaire extends Database {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'SELECT * FROM t_commentaire'
                . ' where bil_id=?';
        $sth = $this->executerRequete($sql, array($idBillet));
        $result = $sth->fetchAll(); 
        if (!$result) {
        return [];
       }
        foreach ($result as $value) {
        $commentaires[] = new Commentaire($value['com_id'], $value['com_date'], $value['com_auteur'], $value['com_contenu'], $value['signal_count'], $value['bil_id']);   
        }   
        return $commentaires;
    }

    public function create($commentaire) {
        $sql = 'INSERT into t_commentaire SET com_date= :dateCommentaire, com_auteur= :AuteurCommentaire, com_contenu= :contenuCommentaire, bil_id= :id';
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
        $sql = 'SELECT count(*) as nbCommentaires from t_commentaire';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbCommentaires'];
    }


    public function getCommentaire($idCommentaire) {
        $sql = 'SELECT * FROM t_commentaire'
            . ' where com_id=:id';
        $sth = $this->executerRequete($sql, array('id' => $idCommentaire));
        $result = $sth->fetch(); 
        return new Commentaire($result['com_id'], $result['com_date'], $result['com_auteur'], $result['com_contenu'], $result['signal_count'], $result['bil_id']);   
    }

    public function commentView($idCommentaire) {
        $sql = 'SELECT * FROM t_commentaire'
            . ' where com_id=:id';
        $sth = $this->executerRequete($sql, array('id' => $idCommentaire));
        $result = $sth->fetch();
        return new Commentaire($result['com_id'], $result['com_date'], $result['com_auteur'], $result['com_contenu'], $result['signal_count'], $result['bil_id']);
    }



    public function commentaireEditer ($contenu, $idCommentaire) {
        $sql = 'UPDATE t_commentaire SET com_contenu = :contenu WHERE com_id = :idc';
        $this->executerRequete($sql, array('contenu' => $contenu, 'idc' => $idCommentaire));
    }


    public function commentaireSupprimer($idCommentaire) {
        $sql = 'DELETE FROM t_commentaire WHERE com_id = :idCommentaire';

        return $this->executerRequete($sql, array(
                'idCommentaire' => $idCommentaire,
            ))->rowCount() == 1;
    }

    public function getComments() {
        $sql = 'SELECT * FROM t_commentaire, t_billet WHERE t_billet.bil_id = t_commentaire.bil_id order by signal_count DESC';
        $sth = $this->executerRequete($sql, array());
        $result = $sth->fetchAll(); 
        if (!$result) {
        return [];
       }
        foreach ($result as $value) {
        $commentaire = new Commentaire($value['com_id'], $value['com_date'], $value['com_auteur'], $value['com_contenu'], $value['signal_count'], $value['bil_id'], $value['bil_titre']);
        $billet = new Billet ($value['bil_id'], $value['bil_date'], $value['bil_titre'], $value['bil_num'], $value['bil_contenu']);
        $commentaire->setBillet($billet);
        $commentaires[] = $commentaire;
        }   
        return $commentaires;
    }



    public function ajouterUnSignalement($id) {
        $sql = 'UPDATE t_commentaire SET signal_count  = signal_count  + 1 WHERE com_id = :id';
        $this->executerRequete($sql, array('id' => $id));
    }


    public function getNombreSignalements() {
        $sql = 'SELECT count(*) AS nbSignalements FROM t_commentaire WHERE signal_count  != 0';
        $reponse = $this->executerRequete($sql);
        $ligne = $reponse->fetch();
        return $ligne['nbSignalements'];
    }

    public function supprimerSignalement($id) {
        $sql = 'UPDATE t_commentaire SET signal_count = 0 WHERE com_id = :id';
        $this->executerRequete($sql, array('id' => $id));
    }
}