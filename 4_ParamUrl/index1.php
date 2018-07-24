<!--Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index.php?nom=Nemare&prenom=Jean -->

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
echo "Bonjour " . ($_GET["nom"]) . " " . ($_GET["prenom"]) . "!";
?>

</body>
</html> 

<!-- <form action="index1.php" method="GET">
    <p>Nom : <input type="text" name="nom"/></p>
    <p>Prénom : <input type="text" name="prenom"></p>
    <p><input type="submit" value="OK"></p>
</form> -->