<?php

session_start();

echo $_SESSION["nom"] . "\n";
echo $_SESSION["prenom"] . "\n";
echo $_SESSION["age"] . "\n";

?>