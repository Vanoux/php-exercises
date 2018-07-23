<?php
/* Avec le tableau de l'exercice 1,
modifier le mois de aout pour lui ajouter l'accent manquant.
*/
$mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
$mois[7] = "août";
echo $mois[7]. "\n";
?>