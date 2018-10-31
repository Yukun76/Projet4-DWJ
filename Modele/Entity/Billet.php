<?php

class Billet  {

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $ordre;

    /**
     * @var string
     */
    private $contenuBillet;


    public function __construct($id=null, $date=null, $titre=null, $ordre=null, $contenuBillet=null)
    {
        $this->id = $id;
        $this->date = $date;        
        $this->titre = $titre;
        $this->ordre = $ordre;
        $this->contenu = $contenuBillet;
    }

    /**
     *Methode qui permet d'hydrater les propriétés de la classe en passant par les setter.
     */
    public function fromArray(array $params)  
    {
        // création du nom du setter : ex : setDate
       foreach ($params as $name => $value) {
            // On teste si le setter est dans la classe
            $setter = 'set' . ucfirst($name);
            // Si le setter existe, on l'utilise pour hydrater la propriété.
            if (method_exists($this, $setter)) {
               $this->$setter($value);
            }
       }
       return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getOrdre()
    {
        return $this->ordre;
    }

    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
        return $this;
    }


    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenuBillet)
    {
        $this->contenu = $contenuBillet;
        return $this;
    }
}