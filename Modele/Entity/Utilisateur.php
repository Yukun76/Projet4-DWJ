<?php

class Utilisateur  {

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $mdp;


    public function __construct($id, $login, $mdp)
    {
        $this->id = $id;
        $this->date = $login;        
        $this->titre = $mdp;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->date;
    }

    public function getMdp()
    {
        return $this->titre;
    }
}