<?php
require_once "class/DbConfig.php";
require_once "class/serieinfo.php";
require_once 'class/Update.php';
$serieIns = new SerieInfo();
$update = new Update();

if(isset($_POST['update'])){
	echo $serieIns->favorite($_POST);
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
	    		<input type="text" name="favorite" placeholder="favorite" required>
	    		<input type="submit" name="update" value="update">
	    	</form>
    	</section>
  </main>


  </body>
</html>