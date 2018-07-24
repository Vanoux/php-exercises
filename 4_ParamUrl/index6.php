<!-- Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index.php?batiment=12&salle=101 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index6</title>
</head>

<body>

<h1>Exo 6 ParamUrl</h1>

<?php
if (isset($_GET["batiment"], $_GET["salle"])){
    echo "Batiment n° : " . $_GET["batiment"] . " & Salle n° : " . $_GET["salle"];
} else {
    echo "Pas de batiment et de salle définit !";
}
?>
    
</body>
</html>