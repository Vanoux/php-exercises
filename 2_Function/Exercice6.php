<?php
/*Faire une fonction qui prend trois paramètres : nom, prenom et age.
Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans". 
*/
function cékoitonblaz($str1, $str2, $nb){
    return "Bonjour " . $str1 . " " . $str2 . ",tu as " . $nb . " ans." . "\n";
}
echo cékoitonblaz("Berreto", "lucian", 55);
?>