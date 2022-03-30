<?php
require_once 'class/User.php';

$user = new User();

if (isset($_POST['login'])) {

    echo $user->login($_POST);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HoBo | Login</title>
    <link rel="stylesheet" href="css/login-register.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
  </head>
  <body>
            <form class="box" method="post">
                <img src="img/logo.png" width="200" alt="Logo">
                <h1>Login</h1>
                <input type="text" name="Voornaam" placeholder="Voornaam" required>
                <input type="text" name="achternaam" placeholder="Achternaam" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="login" value="Login">
                <p class="login">
                  Nieuw? <a href="register.php">Registreer hier</a>
                </p>
            </form>
  </body>
</html>
