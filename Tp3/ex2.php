<?php
/*Formater l’affichage d’une suite de chaînes contenant des noms et prénoms en respectant les critères suivants : un prénom et un nom par ligne,
 affichés sur 20 caractères chacun ; toutes les initiales des mots doivent être alignées verticalement.
*/


$prenomList='Rachel Green,Monica Geller,Phoebe Bouffay,Ross Geller,Chandler Bing,Joey Tribiani';

//On va transformer $prenomList en tableau, on sépare ce qu'il y a entre les ','. Cela va nous permettre de recuperer le nom complet de la personne
$personnes=explode(',',$prenomList);
echo '<pre>';
//On va lire le tablea avec la boucle foreach
foreach ($personnes as $fullName){
    //On separe de nouveau par les ' ' afin d'obtenir le prenom et le nom
    $arrayFullName = explode(' ',$fullName);

    //On met dans ensuite le prenom dans l'indice 0 et le nom dans l'indice 1, avec une separation pour que'il fasse 10 caracteres representé par des " " vers la droite (defini par defaut)
    $firstName=str_pad($arrayFullName[0],10);
    $lastName=str_pad($arrayFullName[1],10);

    //%s%s car il attend deux string
    printf("%s%s\n",$firstName,$lastName);
}
echo '</pre>';