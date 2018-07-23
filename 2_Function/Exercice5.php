<?php
/*Faire une fonction qui prend en paramètre un nombre et une chaine de caractères
et qui renvoit la concaténation de ces deux paramètres.
*/
function mixConcat($nb, $str){
    return $nb . $str . "\n";
}
echo mixConcat(5, " Chiens");
?>