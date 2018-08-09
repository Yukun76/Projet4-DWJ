<?php

require_once 'Database.php';

class Billet extends Database {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'select bil_id as id, bil_num as ordre, bil_date as date,'
                . ' bil_titre as titre, bil_contenu as contenu from t_billet'
                . ' order by bil_num desc LIMIT 2';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

        public function getAllBillet() {
        $sql = 'select bil_id as id, bil_num as ordre, bil_date as date,'
                . ' bil_titre as titre, bil_contenu as contenu from t_billet'
                . ' order by bil_num asc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }


    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getBillet($idBillet) {
        $sql = 'select bil_id as id, bil_num as ordre, bil_date as date,'
                . ' bil_titre as titre, bil_contenu as contenu from t_billet'
                . ' where bil_id=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }

    /**
     * Renvoie le nombre total de billets
     * 
     * @return int Le nombre de billets
     */
    public function getNombreBillets() {
        $sql = 'select count(*) as nbBillets from t_billet';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }

    public function billetCreer($dateBillet, $titreBillet, $ordreBillet, $contenuBillet) {
        $sql = 'INSERT INTO t_billet SET bil_date= :dateBillet, bil_titre= :titreBillet,  bil_num= :ordreBillet, bil_contenu= :contenuBillet';
        return $this->executerRequete($sql, array(
                'dateBillet' => $dateBillet,
                'titreBillet' => $titreBillet,
                'ordreBillet' => $ordreBillet,
                'contenuBillet' => $contenuBillet
            ))->rowCount() == 1;
    }

    public function billetModifier($idBillet, $dateBillet, $titreBillet, $ordreBillet, $contenuBillet) {
        $sql = 'UPDATE t_billet SET bil_date= :dateBillet, bil_titre= :titreBillet, bil_num= :ordreBillet, bil_contenu= :contenuBillet WHERE bil_id=:id';
        return $this->executerRequete($sql, array(
                'dateBillet' => $dateBillet,
                'titreBillet' => $titreBillet,
                'ordreBillet' => $ordreBillet,
                'contenuBillet' => $contenuBillet,
                'id' => $idBillet
            ))->rowCount() == 1;
    }

    public function billetSupprimer($idBillet) {
        $sql = 'DELETE FROM t_billet WHERE bil_id = :numeroBillet';

        return $this->executerRequete($sql, array(
                'numeroBillet' => $idBillet,
            ))->rowCount() == 1;
    }
}