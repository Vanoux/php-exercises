<?php
//Démarre une nouvelle session ou reprend une session existante
session_start();
 ?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GlobalVariable php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="border:2px solid yellow">

  <h1 style="color:brown; text-align:center;">Exercices Global Variable</h1>


  <h2 style="color:forestgreen;">Exo 1</h2> 
  <!-- Exercice 1 
Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur
 --> 
  <h4>User Agent :</h4>
    <p><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></p>
  <h4>Adresse IP :</h4> 
    <p><?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
  <h4>Nom du Serveur :</h4>
    <p><?php echo $_SERVER["SERVER_NAME"]; ?></p>
  <br><hr>


  <h2 style="color:darkviolet">Exo 2</h2>
  <!-- Exercice 2
  Sur la page index, faire un liens vers une autre page.
  Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions.
  Ces variables auront été définies directement dans le code.
  Il faudra afficher le contenu de ces variables sur la deuxième page. 
  -->
  <?php include "exo2.php";?>
  <br><hr>


  <h2 style="color:darkorange">Exo 3</h2>
  <!-- Exercice 3
  Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
  A la validation du formulaire, stocker les informations dans un cookie. 
  -->
  <?php include "exo3.php";?>
  <br>

 
  <h2 style="color:lightseagreen">Exo 4</h2>
  <!-- Exercice 4 
  Faire une page qui va récupérer les informations du cookie créé à l'exercice 3
  et qui les affiches. 
  -->
  <?php include "exo4.php";?>
  <br><hr>


  <h2 style="color:tomato">Exo 5</h2>
  <!-- Exercice 5 
  Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. 
  -->
  <?php include "exo5.php";?>
  

</body>
</html>