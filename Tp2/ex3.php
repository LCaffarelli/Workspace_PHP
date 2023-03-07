<?php
$info_Personne1[]='Madeleine';
$info_Personne1[]='Etats-Unis';
$info_Personne1[]=44;
$nom_Personne1['MILLER']=$info_Personne1;
var_dump($nom_Personne1);

echo '<ul>';
foreach ($nom_Personne1 as $cle => $sousTableau) {
    echo '<li>'.'Element '.$cle;
    echo '<ul>';
    foreach ($sousTableau as $cle => $valeur) {
        echo '<li>'. 'element '.$cle.' : '.$valeur . '</li>';
    }
    echo '</ul></li>';
}
echo '</ul>';

$info_Personne['Prenom']='Margaret';
$info_Personne['Ville']='Canada';
$info_Personne['Age']=83;
$nom_Personne['ATWOOD']=$info_Personne;
var_dump($nom_Personne);

echo '<ul>';
foreach ($nom_Personne as $cle => $sousTableau) {
    echo '<li>'.'Element '.$cle;
    echo '<ul>';
    foreach ($sousTableau as $cle => $valeur) {
        echo '<li>'. 'element '.$cle.' : '.$valeur . '</li>';
    }
    echo '</ul></li>';
}
echo '</ul>';



