<?php
//Tableau multidimensionel indicé (on n'a pas donnée d'indice dans le tableau $info_Personne
$info_Personne[]='Madeleine';
$info_Personne[]='Etats-Unis';
$info_Personne[]=44;
$nom_Personne['MILLER']=$info_Personne;
var_dump($nom_Personne);

//Autre maniere de l'écrire
//$nom_Personne['MILLER'=>['Madeleine','Etats-Unis',44]];
