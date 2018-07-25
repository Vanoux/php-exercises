<form action="index.php" method="POST">
    <label>Login : </label><input type="text" name="login">
    <label>Mot de Passe : </label><input type="password" name="mdp">
    <input type="submit" value="OK">
</form>

<?php
//setcookie() définit un cookie qui sera envoyé
    setcookie("login", $_POST["login"]);
    setcookie("mdp", $_POST["mdp"]);
?>