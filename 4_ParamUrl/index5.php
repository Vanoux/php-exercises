<!-- Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index5.php?semaine=12 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index5</title>
</head>

<body>

<h1>Exo 5 ParamUrl</h1>

<?php
if (isset($_GET["semaine"])){
    echo "Semaine = " . $_GET["semaine"];
} else {
    echo "Pas de semaine définit !";
}
?>

</body>
</html>