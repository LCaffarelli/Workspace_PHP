<?php
require_once 'Personne.class.php';
class Client extends Personne{
    private $adresse;

    /**
     * @param $adresse
     */
    public function __construct($nom, $prenom, $adresse)
    {
        parent::__construct($nom, $prenom);
        $this->adresse = $adresse;
    }


    function setCoord($nom, $prenom, $adresse)
    {

    }

    public function __toString()
    {
        return parent::__toString()." vit ".$this->adresse;
    }

}