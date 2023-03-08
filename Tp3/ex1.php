<?php
/*Transformer une phrase composée de mots écrits dans des casses différentes afin que chaque mot
 ait son premier caractère en majuscule.
Exemple : bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.
*/
$phrase1='bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR';

function passageMaj($phrase){
    $phraseMaj= ucwords($phrase);
    return $phraseMaj;
}
echo passageMaj($phrase1);

//Correction
echo "Transformer une phrase composée de mots écrits dans 
des casses différentes afin que chaque mot ait son premier 
caractère en majuscule.
Exemple : bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.<br>";

$phraseAvantModif = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.";
echo "phrase avant modification : <br>".$phraseAvantModif."<br>";
$phraseApresModif = ucwords(strtolower($phraseAvantModif));
echo "phrase après modification : <br>".$phraseApresModif."<br>";

echo "<h2>Exercice 2</h2>";