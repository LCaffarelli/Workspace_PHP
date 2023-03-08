<?php

class Ville
{
private $nom;
private $departement;

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    function affichage(){
        echo "<p>La ville de ".$this->nom." est dans le département ".$this->departement.".</p>";
    }
}