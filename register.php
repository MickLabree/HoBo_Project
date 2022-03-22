<?php
require_once 'class/User.php';

$user = new User();


if(isset($_POST['register'])){
	echo $user->create($_POST);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HoBo | Register</title>
    <link rel="stylesheet" href="css/login-register.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
  </head>
  <body>

  <main>
    	<section class="form">
	    	<form class="box" method="post">
        <img src="img/logo.png" width="200" alt="Logo">
        <h1>Register</h1>
	    		<input type="text" name="username" placeholder="Username" required>
	    		<input type="password" name="password" placeholder="Password" required>
	    		<input type="password" name="conf-password" placeholder="Password" required>
	    		<input type="submit" name="register" value="Register">
          <p class="login">
            Heb je al een account? <a href="login.php">Login hier</a>
          </p>
	    	</form>
    	</section>
    </main>



  </body>
</html>
