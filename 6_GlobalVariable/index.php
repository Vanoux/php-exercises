<?php
//Démarre une nouvelle session ou reprend une session existante
session_start();

 $_SESSION["nom"] = "roux";
 $_SESSION["prenom"] = "vanessa";
 $_SESSION["age"] = 34;
 ?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exo 1 GlobalVariable php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <h2>Exo 1</h2> 
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


<br><br>


  <h2>Exo 2</h2>
 <!-- Exercice 2
 Sur la page index, faire un liens vers une autre page.
 Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions.
 Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page. 
-->
<?php
include "user.php";
?>


<br><br>


  <h2>Exo 3</h2>
  <!-- Exercice 3
  Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
  A la validation du formulaire, stocker les informations dans un cookie. 
  -->

<form action="user2.php" method="POST">
    <label>Nom : </label><input type="text" name="nom">
    <label>Prénom : </label><input type="text" name="prenom">
    <label>Age : </label><input type="text" name="age">
    <input type="submit" value="OK">
</form> 

</body>
</html>