<!-- Faire une page index.php.
Tester sur cette page que le paramètre age existe
Si c'est le cas l'afficher sinon le signaler :
index2.php?nom=Nemare&prenom=Jean -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index2</title>
</head>
<body>
    
<h1>Exo 2 ParamUrl</h1>

<?php
if (isset($_GET["age"])){
    echo "Voici ton age : " . $_GET["age"];
} else {
    echo "Tu n'as pas indiqué ton age " . $_GET["nom"] . " " . $_GET["prenom"] . "!";
}
?>

</body>
</html>