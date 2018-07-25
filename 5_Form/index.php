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
<div>
<form action="user.php" method="GET">
    <label>Nom :</label><input type="text" name="nom"/>
    <label>Prénom :</label><input type="text" name="prenom"/>
    <input type="submit" value="OK">
</form>
</div>


<br><br>


<h2>Exercice 2 et 4</h2>
<!--
Exo 2 = Créer un formulaire demandant le nom et le prénom.
Ce formulaire doit rediriger vers la page user.php avec la méthode POST

Exo 4 = Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
-->
<div>
<form action="user.php" method="POST">
    <label>Nom :</label><input type="text" name="nom"/>
    <label>Prénom :</label><input type="text" name="prenom"/>
    <input type="submit" value="OK">
</form>
</div>


<br><br>


<h2>Exercice 5, 6, 7 et 8</h2>
<!-- 
Créer un formulaire sur la page index.php avec :

Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode. 
-->

<?php
// EXO 6 : Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET,
// le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être.
// Dans le cas contraire, c'est l'inverse.
// Utiliser qu'une seule page.

// EXO 7 : Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier.
// Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

// EXO 8 : Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
// vérifier que le fichier transmis est bien un fichier pdf.

 if (isset($_POST['civilite'], $_POST['nom'], $_POST['prenom'], $_POST['fichier'])){
    echo "Vous êtes " . $_POST['civilite'] . " " . $_POST['nom'] . " " . $_POST['prenom'] . " Et votre fichier est : " . $_POST['fichier'] . "\n" ;
 } else {
     echo "<form action='index.php' method='POST'>";
     echo "<select name='civilite' size='1'><option></option><option>Mr</option><option>Mme</option></select>";
     echo "<label>Nom :</label><input type='text'required name='nom' />";
     echo "<label>Prénom :</label><input type='text' required name='prenom'/>";
     echo "<input type='file' name='fichier'/>";
     echo "<input type='submit' value='OK'/>";
     echo "</form>";
} 


if (strpos($_POST['fichier'], '.pdf') == true){
    echo "Votre fichier est bien en pdf ! ";
} else {
    echo "Entrez un fichier au format pdf !! ";
}
// $pathInfo = pathinfo($_POST['fichier']);
// if ($pathInfo['extension'] === ".pdf"){
//     echo 'Extension : ' . $pathInfo;
// } else {
//     echo "Mauvaise extension !";
// }
?>


</body>
</html>