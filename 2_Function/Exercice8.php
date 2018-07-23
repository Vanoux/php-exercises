<?php
/* Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.
*/
function somme($nb1 = 1, $nb2 = 2, $nb3 = 3){
    $result = $nb1 + $nb2 + $nb3;
    return $result . "\n";
}
echo somme();
echo somme(4, 5, 1);
?>