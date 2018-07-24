<?php
/*
Avec le tableau de l'exercice 5,
Afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : 
"Le département" + nom_departement + "a le numéro" + num_departement
*/

include("Exercice5.php");

//foreach pour parcourir un tableau avec la syntaxe : foreach (arrayExpression as $key => $value){commandes...}
foreach ($tableau as $key => $value){
    echo "le departement $value a le numéro $key " . "\n";
}
?>