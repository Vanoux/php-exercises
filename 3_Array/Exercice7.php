<?php
/*
Avec le tableau de l'exercice 5,
ajouter la ligne correspondant au département de la ville de Reims.
*/
// $tableau = array(
//     "02" => "Aisne",
//     "59" => "Nord",
//     "60" => "Oise",
//     "62" => "Pas-de-Calais",
//     "80" => "Somme"
// );

include("Exercice5.php");
/*
Ajout d'éléments à la fin d'un tableau associatif :
l'opérateur unaire de tableau unaire (+=)
 */ 
$tableau += ["51" => "Marne"];
echo $tableau["51"]. "\n";
?>