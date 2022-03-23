<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>HoBo | zoekResultaat</title>
    <link rel="stylesheet" href="css/zoeken.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png" width="100%">
</head>
<body>
  
</body>
</html>

<?php
require_once 'class/Zoeken.php';
$zoek = new Zoeken();

if(isset($_POST["submit-search"])) {
  foreach($zoek->zoeken($_POST['search']) as $serie){
    echo $serie->SerieTitel . "<br>";
  }
}
?>