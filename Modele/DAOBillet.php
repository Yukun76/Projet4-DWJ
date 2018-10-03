<?php

require_once 'Database.php';
require_once 'Entity/Billet.php';

class DAOBillet extends Database {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    
    public function getBillets() {
        $sql = 'SELECT * FROM billet'
        . ' order by bil_num desc LIMIT 2';
        $sth = $this->executerRequete($sql);
        $result = $sth->fetchAll();
        if (!$result) {
        return [];
        }
        foreach ($result as $value) {
        $billets[] = new Billet($value['bil_id'], $value['bil_date'], $value['bil_titre'], $value['bil_num'], $value['bil_contenu']);
        }
        return $billets;
    }


    public function getAllBillet($offset=null, $limit=null) {
        $limitSQL = '';
        if ($offset !== null & $limit !== null) {
            $limitSQL = ' LIMIT ' . $offset . ',' . $limit;
        }
        $sql = 'SELECT * FROM billet'
        . ' order by bil_num asc' 
        . $limitSQL;
        $sth = $this->executerRequete($sql);
        $result = $sth->fetchAll();
        if (!$result) {
        return [];
        }
        foreach ($result as $value) {
        $billets[] = new Billet($value['bil_id'], $value['bil_date'], $value['bil_titre'], $value['bil_num'], $value['bil_contenu']);
        }
        return $billets;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getBillet($idBillet) {
        $sql = 'SELECT * FROM billet'
                . ' where bil_id=?';
        $sth = $this->executerRequete($sql, array($idBillet));
        $result = $sth->fetch(); 
        if (!$result) {
            return null;
        }       
        if ($sth->rowCount() > 0)
            return new Billet($result['bil_id'], $result['bil_date'], $result['bil_titre'], $result['bil_num'], $result['bil_contenu']);
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");         
    }

    /**
     * Renvoie le nombre total de billets
     * 
     * @return int Le nombre de billets
     */
    public function getNombreBillets() {
        $sql = 'SELECT count(*) as nbBillets from billet';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }

    public function billetCreer($billet) {
       $sql = 'INSERT INTO billet SET bil_date= :dateBillet, bil_titre= :titreBillet,  bil_num= :ordreBillet, bil_contenu= :contenuBillet';     
       return $this->executerRequete($sql, array(
               'dateBillet' => $billet->getDate(),
               'titreBillet' => $billet->getTitre(),
               'ordreBillet' => $billet->getOrdre(),
               'contenuBillet' => $billet->getContenu()

           ))->rowCount() == 1;
   }

    public function billetModifier($billet, $idBillet) {
        $sql = 'UPDATE billet SET bil_date= :dateBillet, bil_titre= :titreBillet, bil_num= :ordreBillet, bil_contenu= :contenuBillet WHERE bil_id=:id';
        return $this->executerRequete($sql, array(
                'dateBillet' => $billet->getDate(),
               'titreBillet' => $billet->getTitre(),
               'ordreBillet' => $billet->getOrdre(),
               'contenuBillet' => $billet->getContenu(),
                'id' => $idBillet
            ))->rowCount() == 1;
    }

    public function billetSupprimer($idBillet) {
        $sql = 'DELETE FROM billet WHERE bil_id = :numeroBillet';

        return $this->executerRequete($sql, array(
                'numeroBillet' => $idBillet,
            ))->rowCount() == 1;
    }
}



