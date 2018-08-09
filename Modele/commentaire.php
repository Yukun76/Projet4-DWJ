<?php

require_once 'Database.php';

class Commentaire extends Database {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'select com_id as id, com_date as date,'
                . ' com_auteur as auteur, com_contenu as contenu from t_commentaire'
                . ' where bil_id=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }


    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into t_commentaire(com_date, com_auteur, com_contenu, bil_id)'
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
        $sql = 'select count(*) as nbCommentaires from t_commentaire';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbCommentaires'];
    }


    public function getCommentaire($idCommentaire)
    {
        $sql = 'select com_id as id, com_date as date, bil_id as bil_id,'
            . ' com_auteur as auteur, com_contenu as contenu from t_commentaire'
            . ' where com_id=:id';
        $commentaire = $this->executerRequete($sql, array('id' => $idCommentaire))->fetch();
        return $commentaire;
    }

    public function commentView($idCommentaire)
    {
        $sql = 'select com_id as id, com_date as date, bil_id as bil_id,'
            . ' com_auteur as auteur, com_contenu as contenu from t_commentaire'
            . ' where com_id=:id';
        $commentaire = $this->executerRequete($sql, array('id' => $idCommentaire))->fetch();
        return $commentaire;
    }



    public function commentaireEditer ($contenu, $idCommentaire) {
        $sql = 'UPDATE t_commentaire SET com_contenu = :contenu WHERE com_id = :idc';
        $this->executerRequete($sql, array('contenu' => $contenu, 'idc' => $idCommentaire));
    }


    public function commentaireSupprimer($idCommentaire){
        $sql = 'DELETE FROM t_commentaire WHERE com_id = :idCommentaire';

        return $this->executerRequete($sql, array(
                'idCommentaire' => $idCommentaire,
            ))->rowCount() == 1;
    }

    public function getComments()
    {
         $sql = 'SELECT t_billet.bil_id AS id, t_billet.bil_titre AS titre, t_commentaire.com_id AS idc, t_commentaire.com_contenu AS contenu, com_auteur as auteur, t_commentaire.signal_count AS signalement FROM t_commentaire, t_billet WHERE t_billet.bil_id = t_commentaire.bil_id order by signal_count DESC';
        $CommentairesTronques = $this->executerRequete($sql, array());
        return $CommentairesTronques->fetchall();
    }



    public function ajouterUnSignalement($id)
    {
        $sql = 'UPDATE t_commentaire SET signal_count  = signal_count  + 1 WHERE com_id = :id';
        $this->executerRequete($sql, array('id' => $id));
    }


    public function getNombreSignalements()
    {
        $sql = 'SELECT count(*) AS nbSignalements FROM t_commentaire WHERE signal_count  != 0';
        $reponse = $this->executerRequete($sql);
        $ligne = $reponse->fetch();
        return $ligne['nbSignalements'];
    }

    public function supprimerSignalement($id)
    {
        $sql = 'UPDATE t_commentaire SET signal_count = 0 WHERE com_id = :id';
        $this->executerRequete($sql, array('id' => $id));
    }
}