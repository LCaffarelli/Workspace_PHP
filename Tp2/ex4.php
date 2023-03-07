<?php
$email[]='blabla@gmail.com';
$email[]='bleble@gmail.com';
$email[]='blibli@gmail.com';
$email[]='bloblo@gmail.com';
$email[]='blabla@hotmail.fr';
$email[]='blibli@hotmail.fr';
$email[]='blabla@orange.fr';
$email[]='blibli@orange.fr';
$email[]='bloblo@orange.fr';
$email[]='bloblo@sfr.fr';

//transformation de chaque element en un seul:
//On fait notre tableau
$newArray=array();

//On fait une boucle qui va remplir le tableau avec les valeurs que l'on souhaite. Ici avec le explode on recupere ce qu'il y a derriere l'@ pour recuperer le domaine
foreach ($email as $key => $value){
    $newArray[]= explode('@', $value)[1];
}
var_dump($newArray);

//Permet de calculer les occurences dans un tableau
var_dump(array_count_values($newArray));

/*Pour la correction de la suite voir le git*/
;


