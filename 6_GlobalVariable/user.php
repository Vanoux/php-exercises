<?php
session_start();
?>

<?php
//Exo 2
echo "Infos Session : " . $_SESSION["nom"] . " " . $_SESSION["prenom"] . " " . $_SESSION["age"] . "\n";
?>
<br><br>
<hr><br>


<?php
//Exo 4
echo "Infos Cookies : " . $_COOKIE["login"] . " " . $_COOKIE["mdp"] . "\n";
?>
<br><hr>
<br><br>

