<?php

class VilleAvecRegion extends Villes
{
    private $region;

    /**
     * @param $region
     */
    public function __construct($nom, $departement, $region)
    {
        parent::__construct($nom, $departement);
        $this->region = $region;
    }


    public function affichageVilles()
    {
        echo parent::affichageVilles() . " de la région " . $this->region;
    }

}