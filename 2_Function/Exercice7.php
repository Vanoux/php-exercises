<?php
/*Faire une fonction qui prend deux paramètres: age et genre.
Le paramètre genre peut prendre comme valeur :

    Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

*/
function ageGenre($nb, $str){
    if ($str == "homme" && $nb >= 18){
        return "Vous êtes un homme et vous êtes majeur" . "\n";
    } elseif ($str == "homme" && $nb < 18){
        return "Vous êtes un homme et vous êtes mineur" . "\n";
    } elseif ($str == "femme" && $nb >= 18){
        return "Vous êtes une femme et vous êtes majeur" . "\n";
    } else {
        return "Vous êtes une femme et vous êtes mineur" . "\n";
    }
}
echo ageGenre(18, "homme");
echo ageGenre(34, "femme");
echo ageGenre(15, "femme");
echo ageGenre(7, "homme");
?>