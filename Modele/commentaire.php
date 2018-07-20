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

    public function commentView($idCommentaire)
    {
        $sql = 'select COM_ID as id, COM_DATE as date, BIL_ID as bil_id,'
            . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
            . ' where COM_ID=:id';
        $commentaire = $this->executerRequete($sql, array('id' => $idCommentaire))->fetch();
        return $commentaire;
    }



    public function commentaireEditer ($contenu, $idCommentaire) {
        $sql = 'UPDATE T_COMMENTAIRE SET COM_CONTENU = :contenu WHERE COM_ID = :idc';
        $this->executerRequete($sql, array('contenu' => $contenu, 'idc' => $idCommentaire));
    }


    public function commentaireSupprimer($idCommentaire){
        $sql = 'DELETE FROM T_COMMENTAIRE WHERE COM_ID = :idCommentaire';

        return $this->executerRequete($sql, array(
                'idCommentaire' => $idCommentaire,
            ))->rowCount() == 1;
    }

    public function getComments()
    {
         $sql = 'SELECT T_BILLET.BIL_ID AS id, T_BILLET.BIL_TITRE AS titre, T_COMMENTAIRE.COM_ID AS idc, T_COMMENTAIRE.COM_CONTENU AS contenu, COM_AUTEUR as auteur, T_COMMENTAIRE.SIGNAL_COUNT AS signalement FROM T_COMMENTAIRE, T_BILLET WHERE T_BILLET.BIL_ID = T_COMMENTAIRE.BIL_ID order by SIGNAL_COUNT DESC';
        $CommentairesTronques = $this->executerRequete($sql, array());
        return $CommentairesTronques->fetchall();
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

    public function supprimerSignalement($id)
    {
        $sql = 'UPDATE T_COMMENTAIRE SET SIGNAL_COUNT = 0 WHERE COM_ID = :id';
        $this->executerRequete($sql, array('id' => $id));
    }
}