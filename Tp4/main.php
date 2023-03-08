<?php
require_once 'Ville.class.php';
require_once 'Villes.class.php';
require_once 'VilleAvecRegion.class.php';
require_once 'Client.class.php';
require_once 'Personne.class.php';

$ville1=new Ville();
$ville2=new Ville();

$ville1->setNom('Bordeaux');
$ville1->setDepartement('33');

$ville2->setNom('Nantes');
$ville2->setDepartement('44');

$ville1->affichage();
$ville2->affichage();

$villes1=new Villes('Bonifacio','2A');
$villes2 = new Villes('Bergerac','24');

$villes1->affichageVilles();
$villes2->affichageVilles();

$villesReg=new VilleAvecRegion('Terasson-Lavilledieu','24','Dordogne');
$villesReg->affichageVilles();

$bonifacio=$villes1->tailleNom();
$bergerac=$villes2->tailleNom();
$terrasson=$villesReg->tailleNom();

//**************************************
//**************************************
//**************************************
//
$personne= new Client('Bla','Blablba','4 rue du ble');

//$personne->setCoord('Bla',)