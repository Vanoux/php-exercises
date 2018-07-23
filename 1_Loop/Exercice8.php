<?php
/*En allant de 200 à 0 avec un pas de 12,
afficher le message Enfin !!!!
*/ 
$enfin = 200;
while ($enfin >= 0) {
    echo $enfin . " : Enfin !!!!" . "\n";
    $enfin = $enfin-12;
}
?>