<!-- Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index3.php?dateDebut=2/05/2016&dateFin=27/11/2016 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index3</title>
</head>

<body>
    
<h1>Exo 3 ParamUrl</h1>

<?php
if (isset($_GET["dateDebut"], $_GET["dateFin"])){
    echo "Date de début : " . $_GET["dateDebut"] . " et Date de fin : " . $_GET["dateFin"];
} else {
    echo "Aucune date à afficher !";
}
?>

</body>
</html>