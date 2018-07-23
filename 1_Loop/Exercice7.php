<?php 
/* En allant de 1 à 100 avec un pas de 15,
afficher le message "On tient le bon bout"
*/
$bonBout = 1;
while ($bonBout <= 100) {
    echo $bonBout . " : On tient le bon bout" . "\n";
    $bonBout = $bonBout+15;
}
?>