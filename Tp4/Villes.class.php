<?php

class Villes
{
    private $nom;
    private $departement;

    /**
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    /**
     * @param mixed $nom
     */
    public function getNom($nom)
    {
        $this->nom = $nom;
    }



    function affichageVilles(){
        echo "<p>La ville de ".$this->nom." est dans le département ".$this->departement;
    }

    function tailleNom(){
        $tailleNomVille=strlen($this->nom);
        return "<p> La taille du nom de la ville de ".$this->nom." est de ".$tailleNomVille." caractères";
    }

}