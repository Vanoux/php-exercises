<!-- Faire une page index.php.
Tester sur cette page que le paramètre age existe
et si c'est le cas l'afficher sinon le signaler :
 index.php?nom=Nemare&prenom=Jean -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<h1>Exo 2 ParamUrl</h1>

<?php
if ($_GET["age"]){
    echo ($_GET["age"]);
} else {
    echo "Tu n'as pas indiquer ton age " . ($_GET["nom"]) . " " . ($_GET["prenom"]) . "!";
}
?>

</body>
</html>