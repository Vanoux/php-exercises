<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo Form php</title>
</head>

<body>


<h2>Exercice 1 et 3</h2>
<!--
Exo 1 = Créer un formulaire demandant le nom et le prénom.
Ce formulaire doit rediriger vers la page user.php avec la méthode GET

Exo 3 = Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis. 
-->
<form action="user.php" method="GET">
    <label>Nom :</label><input type="text" name="nom"/>
    <label>Prénom :</label><input type="text" name="prenom"/>
    <input type="submit" value="OK">
</form>


<br><br>


<h2>Exercice 2 et 4</h2>
<!--
Exo 2 = Créer un formulaire demandant le nom et le prénom.
Ce formulaire doit rediriger vers la page user.php avec la méthode POST

Exo 4 = Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
-->
<form action="user.php" method="POST">
    <label>Nom :</label><input type="text" name="nom"/>
    <label>Prénom :</label><input type="text" name="prenom"/>
    <input type="submit" value="OK">
</form>


</body>
</html>