<!--Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index1.php?nom=Nemare&prenom=Jean -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index1</title>
</head>
<body>

<h1>Exo 1 ParamUrl</h1>

<?php
//isset() = Détermine si une variable ou élément de tableau est existant et est différente de NULL
if (isset($_GET["nom"], $_GET["prenom"])){
    echo "Bonjour " . $_GET["nom"] . " " . $_GET["prenom"] . "!";
} else {
    echo "Nom et Prénom non définit !";
}
?>

</body>
</html> 

