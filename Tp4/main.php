<?php
require_once 'Ville.class.php';
require_once 'Villes.class.php';
require_once 'VilleAvecRegion.class.php';
require_once 'Client.class.php';
require_once 'Personne.class.php';
require_once 'Form.class.php';

//**************************************
//Exercices Villes
//**************************************
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
//Exercices Formulaire
//**************************************

//j'instancie un nouveau forumlaire
$formulaire= new Form();

//Je lui rentre ses valeurs
$formulaire->setText("id1","blabla","blop");
$formulaire->setText("id2");
$formulaire->setSubmit("bouton du formulaire");

//je crée le formulaire avec getForm et l'affiche avec echo
echo $formulaire->getForm();



//**************************************
//Exercices Personnes
//**************************************


//$personne= new Client('Bla','Blablba','4 rue du ble');
//echo $personne;
//$personne->setCoord('Bla',)