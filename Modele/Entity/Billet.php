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


    public function fromArray(array $params)
    {
       foreach ($params as $name => $value) {
           $setter = 'set' . ucfirst($name);
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