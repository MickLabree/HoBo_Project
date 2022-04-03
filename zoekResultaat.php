<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/zoeken.css">
    <link rel="stylesheet" href="css/global.css">
    <title>HoBo | Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a href="#">Series</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="voorkeur.php" style="margin-right: 20px;"><i class="fa-solid fa-user"></i></a><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
        
    </header>

<?php
require_once 'class/Zoeken.php';
$serieIns = new Zoeken();
$zoek = new Zoeken();
?>

<section id="fotos">
            <section id="flex">
                <?php if(isset($_POST["submit-search"])) {
                  foreach($zoek->zoeken($_POST['search']) as $serie){?>
                    <article>
                        <a href="#" style="color: white;">
                        <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                        <p><?php echo $serie->SerieTitel; ?></p>
                        </a>
                    </article>
                <?php } }?>
            </section>
  </section>