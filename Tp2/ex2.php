<?php

//Tableau multidimensionel associatif car on a donné une valeur dans les indices de $info_Personne
$info_Personne['Prenom']='Margaret';
$info_Personne['Ville']='Canada';
$info_Personne['Age']=83;
$nom_Personne['ATWOOD']=$info_Personne;
var_dump($nom_Personne);

//Autre écriture
//$nom_Personne['ATWOOD'=>['Prenom'=>'Margaret','Ville'=>'Canada','Age'=>83]];