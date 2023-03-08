<?php
/*Calculer votre âge à l’instant actuel à la seconde près.*/

function calculAge($bDay){
    $now=time();
    $anniv=$bDay;
    $calcul= abs($now-$anniv);
    $timestamp=$calcul;
    $format=" Y d G i s";
    return date($format,$timestamp);
    //return $calcul;
}
$bDay=strtotime("1992-08-06 05:30:00");
echo calculAge($bDay);

