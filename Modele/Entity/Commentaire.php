<?php

class Commentaire  {

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
    private $auteur;

    /**
     * @var string
     */
    private $contenuCom;

    /**
     * @var string
     */
    private $signal;

    /**
     * @var string
     */
    private $bilid;

    /**
     * @var string
     */
    private $biltitre;

    /**
     * @var string
     */
    private $isRead;


    private $billet;



    public function __construct($id=null, $date=null, $auteur, $contenuCom, $bilid, $signal=null, $biltitre=null, $isRead=null)
    {
        $this->id = $id;
        $this->date = $date;        
        $this->auteur = $auteur;
        $this->contenu = $contenuCom;
        $this->bilid = $bilid;
        $this->signal = $signal;
        $this->biltitre = $biltitre;
        $this->isRead = $isRead;
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

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }


    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenuCom)
    {
        $this->contenu = $contenuCom;
        return $this;
    }


    public function setSignal($signal)
    {
        $this->signal = $signal;
        return $this;
    }

    public function getSignal()
    {
        return $this->signal;
    }

    public function addSignal($signal=1)
    {
        $this->signal = $this->signal + $signal;
        return $this;
    }


    public function getBilId()
    {
        return $this->bilid;
    }


    public function getBilTitre()
    {
        return $this->biltitre;
    }

    public function getBillet()
    {
        return $this->billet;
    }
    
    public function setBillet($billet)
    {
        $this->billet = $billet;
        return $this;
    }

    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;
        return $this;
    }

    public function getIsRead()
    {
        return $this->isRead;
    }
}