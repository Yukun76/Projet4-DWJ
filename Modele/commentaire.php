<?php

require_once 'Framework/Modele.php';

class Commentaire extends Modele {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'select COM_ID as id, COM_DATE as date,'
                . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
                . ' where BIL_ID=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

    public function getComments() {
        $sql = 'select BIL_ID as id, SIGNAL_COUNT,'
                . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
                . ' order by SIGNAL_COUNT DESC';        
        $commentaires = $this->executerRequete($sql);
        return $commentaires;
    }
    

    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' values(?, ?, ?, ?)';
        $date = date(DATE_W3C);
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
    }
    
    /**
     * Renvoie le nombre total de commentaires
     * 
     * @return int Le nombre de commentaires
     */
    public function getNombreCommentaires()
    {
        $sql = 'select count(*) as nbCommentaires from T_COMMENTAIRE';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbCommentaires'];
    }


    public function getCommentaire($idCommentaire)
    {
        $sql = 'select COM_ID as id, COM_DATE as date, BIL_ID as bil_id,'
            . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
            . ' where COM_ID=:id';
        $commentaire = $this->executerRequete($sql, array('id' => $idCommentaire))->fetch();
        return $commentaire;
    }

    public function countCommentaires()
    {
        $sql = 'SELECT COUNT(COM_ID) AS cpt FROM T_COMMENTAIRE';
        $nombreCommentaire = $this->executerRequete($sql)->fetch();
        return $nombreCommentaire['cpt'];
    }

    public function countCommentaire($idBillet) {
        $sql = 'SELECT COUNT(COM_ID) AS cpt FROM T_COMMENTAIRE WHERE BIL_ID = :idBillet';
        $nombreCommentairesPerBillet = $this->executerRequete($sql, array('idBillet' => $idBillet))->fetch();
        return $nombreCommentairesPerBillet['cpt'];
    }


    public function commentaireSupprimer($idCommentaire){
        $sql = 'DELETE FROM T_COMMENTAIRE WHERE COM_ID = :idCommentaire';

        return $this->executerRequete($sql, array(
                'idCommentaire' => $idCommentaire,
            ))->rowCount() == 1;
    }


    public function ajouterUnSignalement($id)
    {
        $sql = 'UPDATE T_COMMENTAIRE SET SIGNAL_COUNT  = SIGNAL_COUNT  + 1 WHERE COM_ID = :id';
        $this->executerRequete($sql, array('id' => $id));
    }


    public function getNombreSignalements()
    {
        $sql = 'SELECT count(*) AS nbSignalements FROM T_COMMENTAIRE WHERE SIGNAL_COUNT  != 0';
        $reponse = $this->executerRequete($sql);
        $ligne = $reponse->fetch();
        return $ligne['nbSignalements'];
    }
}