<?php

abstract class Personne{
private $nom;
private $prenom;

    /**
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    public function __toString()
    {
        return "La personne ".$this->nom." ".$this->prenom;
    }


}