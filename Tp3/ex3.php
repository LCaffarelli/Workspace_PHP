<?php
/*D'après Wikipédia, « Pour des raisons d'habitudes, d'ancienneté du principe, ou de facilité de mise en œuvre, de nombreux développeurs de
logiciels utilisent ou ont utilisé le classement selon l’ordre des codes dans le codage de caractères utilisé (par exemple ASCII ou UTF-8),
nommé ordre lexicographique ».
Le problème est que si l'on trie '1abc', '2def' et '10ghi', le 10 sera entre le 1 et le 2. Ce n'est pas l'ordre naturel.
Trier un tableau suivant l'ordre naturel.
*/

$tab=array('1abc','7jkl','10ghi','2def');
var_dump($tab);

//permet de trier le tableau, SORT_NATURAL est un autre filtre que l'on rajoute pour qu'il les trier de la meme manière que l'on compte
sort($tab,SORT_NATURAL);
print_r($tab);




