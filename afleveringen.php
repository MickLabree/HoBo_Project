<?php
require_once "class/serieinfo.php";
// require_once "class/User.php";
session_start();
$aflevering = new SerieInfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
      <section class="content">
          
      <?php
        foreach ($aflevering->getAfleveringen($_GET["serie"], $_GET["seizoen"]) as $afleveringData) {
            echo $afleveringData->AflTitel . "<br>";
          }
        ?>
      </section>
      <section class="content">
          
      <?php
        foreach ($aflevering->getSeasonOfSerie($_GET["serie"]) as $seizoen) {
            ?>
            
            <a href="afleveringen.php?serie=<?php echo $_GET['serie'] ?>&seizoen=<?php echo $seizoen->Rang ?>">Seizoen: <?php echo $seizoen->Rang ?></a>
            <?php
          }
        ?>
      </section>
    </main>
    
    
</body>
</html>