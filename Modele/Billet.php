<?php

require_once 'Database.php';

class Billet extends Database {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'select BIL_ID as id, BIL_NUM as ordre, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_NUM desc LIMIT 2';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

        public function getAllBillet() {
        $sql = 'select BIL_ID as id, BIL_NUM as ordre, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_NUM asc';
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
        $sql = 'select BIL_ID as id, BIL_NUM as ordre, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' where BIL_ID=?';
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
        $sql = 'select count(*) as nbBillets from T_BILLET';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }

    public function billetCreer($dateBillet, $titreBillet, $ordreBillet, $contenuBillet) {
        $sql = 'INSERT INTO T_BILLET SET BIL_DATE= :dateBillet, BIL_TITRE= :titreBillet,  BIL_NUM= :ordreBillet, BIL_CONTENU= :contenuBillet';
        return $this->executerRequete($sql, array(
                'dateBillet' => $dateBillet,
                'titreBillet' => $titreBillet,
                'ordreBillet' => $ordreBillet,
                'contenuBillet' => $contenuBillet
            ))->rowCount() == 1;
    }

    public function billetModifier($idBillet, $dateBillet, $titreBillet, $ordreBillet, $contenuBillet) {
        $sql = 'UPDATE T_BILLET SET BIL_DATE= :dateBillet, BIL_TITRE= :titreBillet, BIL_NUM= :ordreBillet, BIL_CONTENU= :contenuBillet WHERE BIL_ID=:id';
        return $this->executerRequete($sql, array(
                'dateBillet' => $dateBillet,
                'titreBillet' => $titreBillet,
                'ordreBillet' => $ordreBillet,
                'contenuBillet' => $contenuBillet,
                'id' => $idBillet
            ))->rowCount() == 1;
    }

    public function billetSupprimer($idBillet) {
        $sql = 'DELETE FROM T_BILLET WHERE BIL_ID = :numeroBillet';

        return $this->executerRequete($sql, array(
                'numeroBillet' => $idBillet,
            ))->rowCount() == 1;
    }
}