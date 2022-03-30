<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/logo1.png" width="100%">
  <link rel="stylesheet" href="css/home.css">
  <title>HoBo | Home</title>
</head>

<body>

  <!-- main -->
  <form method="POST" action="zoekResultaat.php">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
  </form>

  <?php
require_once 'class/Zoeken.php';
$zoek = new Zoeken();

for($i = 0; $i < count($zoek->getSeries()); $i++){
  $text = $zoek->getSeries()[$i]->SerieTitel . " ";
  if($i % 5 == 0 && $i > 0){
    $text .= "<br>";
  }
  echo $text;
}

if(isset($_POST["submit-search"])) {
  foreach($zoek->zoeken($_POST['search']) as $serie){
    echo $serie->SerieTitel . "<br>";
  }
}

?>

</body>

</html>