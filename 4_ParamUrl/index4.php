<!-- Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index4.php?langage=PHP&serveur=LAMP -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index4</title>
</head>

<body>

<h1>Exo 4 ParamUrl</h1>

<?php
if (isset($_GET["langage"], $_GET["serveur"])){
  echo "Langage : " . $_GET["langage"] . " & Serveur : " . $_GET["serveur"];
} else {
    echo "Pas de langage et de serveur définit !";
}
?>
    
</body>
</html>