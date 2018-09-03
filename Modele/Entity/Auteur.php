<?php

class Auteur  {

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $texte;


    public function __construct($photo, $titre, $texte)
    {
        $this->photo = $photo;
        $this->titre = $titre;
        $this->texte = $texte;
    }


    public function getPhoto() 
    {
        return $this->photo;
    }


    public function setPhoto($photo) 
    {
        $this->photo = $photo;
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

    public function getTexte()
    {
        return $this->texte;
    }
}