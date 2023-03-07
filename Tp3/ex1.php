<?php
$phrase1='bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR';

function passageMaj($phrase){
    $phraseMaj= ucwords($phrase);
    return $phraseMaj;
}
echo passageMaj($phrase1);