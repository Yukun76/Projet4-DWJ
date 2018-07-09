<?php

require_once 'Framework/Modele.php';

class Billet extends Modele {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_TITRE desc LIMIT 2';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

        public function getEpisode() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_TITRE asc';
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
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
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
    public function getNombreBillets()
    {
        $sql = 'select count(*) as nbBillets from T_BILLET';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }

    public function billetCreer($dateBillet, $titreBillet, $contenuBillet)
    {
        $sql = 'INSERT INTO T_BILLET SET BIL_DATE= :dateBillet, BIL_TITRE= :titreBillet, BIL_CONTENU= :contenuBillet';
        return $this->executerRequete($sql, array(
                'dateBillet' => $dateBillet,
                'titreBillet' => $titreBillet,
                'contenuBillet' => $contenuBillet
            ))->rowCount() == 1;
    }

    public function billetModifier($idBillet, $dateBillet, $titreBillet, $contenuBillet)
    {
        $sql = 'UPDATE T_BILLET SET BIL_DATE= :dateBillet, BIL_TITRE= :titreBillet, BIL_CONTENU= :contenuBillet WHERE BIL_ID=:id';
        return $this->executerRequete($sql, array(
                'dateBillet' => $dateBillet,
                'titreBillet' => $titreBillet,
                'contenuBillet' => $contenuBillet,
                'id' => $idBillet
            ))->rowCount() == 1;
    }

    public function billetSupprimer($idBillet)
    {
        $sql = 'DELETE FROM T_BILLET WHERE BIL_ID = :numeroBillet';

        return $this->executerRequete($sql, array(
                'numeroBillet' => $idBillet,
            ))->rowCount() == 1;
    }

    public function formatDate($billet){
        $dateModifie = IntlDateFormatter::formatObject(new DateTime($billet['date']),IntlDateFormatter::LONG);
    return $dateModifie;
    }
}