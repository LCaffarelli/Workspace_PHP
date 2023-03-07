<?php echo '<h1>Hello World !</h1>';
//un commentaire sur une ligne
echo "Il y a un commentaire au dessus";
/*
 * Un commentaire sur plusieurs lignes
 * */
$mail='henri.desmoulins3@eni.fr';
$position=strpos($mail,'i');
if($position===false){
    echo"<br>'@'est introuvable dans $mail<br>";
}else{
    echo"'@'est à la position $position dans $mail<br>";}

echo'<p><code>date("d/m/YH:i:s",mktime(11,45,30,4,10,2017))</code>='.date("d/m/YH:i:s",mktime(11,45,30,4,10,2017)).'<br>';
echo'Unix a fêté sa milliardième seconde le'.date("d/m/YH:i:s",1000000000).'</p>';
echo'<p>Date du jour au format JJ/MM/AAAA:'.date('d/m/Y').'<p>';

function testReference($param1,$param2){
    var_dump($param1);
    var_dump($param2);
    $tab=explode(' ',$param1);//transforme la string en tableau
}

testReference("c'est la string",12542);
