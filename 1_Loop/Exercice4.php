<?php 
/* Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur
*/
$num = 1;
while ($num < 11) {
    echo $num . "\n";
    $num = $num+$num/2;  
}
?>