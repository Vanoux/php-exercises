<?php
/*
Avec le tableau de l'exercice 5,
afficher toutes les valeurs de ce tableau.
*/

include("Exercice5.php");

//print_r() = Affiche des informations à propos d'une variable, de manière à ce qu'elle soit lisible. 
//array_values() = Retourne les valeurs du tableau array et l'indexe de facon numérique. 
print_r(array_values($tableau));
?>