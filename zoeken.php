<?php
    require_once "class/DbConfig.php";
    require_once "class/serieinfo.php";
    require_once 'class/Update.php';
    require_once 'class/Zoeken.php';
    $serieIns = new Zoeken();
    $zoek = new Zoeken();
    $serieIns = new SerieInfo();
    $update = new Update();
    session_start();
    if(!$_SESSION['ingelogd']){
        header("Location: bezoeker.php");
}

    if(isset($_POST["submit-search"])) {
      // foreach($zoek->zoeken($_POST['search']) as $serie){

      // }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/logo1.png" width="100%">
  <link rel="stylesheet" href="css/zoeken.css">
  <link rel="stylesheet" href="css/global.css">
  <title>HoBo | Zoeken</title>
</head>

<body>

    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a class="active" href="zoeken.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a href="#">Series</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="profiel.php" style="margin-right: 20px;"><i class="fa-solid fa-user"></i></a><a href="logout.php"><i id="singout" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

  <!-- Zoeken -->
  <section class="test">
    <section id="search-box">
      <h1>Zoeken</h1>
      <form class="item-search-box" method="POST" action="zoeken.php">
        <input class="search-input" type="text" name="search" placeholder="Zoeken" >
        <button class="search-btn" type="submit" name="submit-search" value="Zoeken"><i class="fas fa-search"></i></button>
      </form>
    </section>
  </section>



<section id="fotos">
            <section id="flex">
                <?php if(isset($_POST["submit-search"])) {?>
                    <!-- <h3>Search Result</h3> -->
                 <?php foreach($zoek->zoeken($_POST['search']) as $serie){?>
                    <article>
                        <a href="#" style="color: white;">
                        <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                        <p><?php echo $serie->SerieTitel; ?></p>
                        </a>
                    </article>
                <?php } }?>
            </section>
  </section>

  <section id="fotos">
            <h3>Genre - <?= $_SESSION['genre'] ?></h3>
            <section id="flex">
                <?php foreach($serieIns->getSeriesByGenre($_SESSION['genre']) as $serie){ ?>
                    <article>
                        <a href="#" style="color: white;">
                            <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                            <p><?php echo $serie->SerieTitel; ?></p>
                        </a>
                    </article>
                <?php } ?>
            </section>
        </section>


      <!-- Footer -->

      <section id="footer">
        <article class="footer-links">
            <h1>About us</h1>
        <p>
            HoBo is free tv shows streaming website with zero ads, it allows you watch tv shows online,
             watch tv shows online free in high quality for free. You can also download full tv shows and watch it later if you want.
        </p>
        <div class="item-icons">
            <a href="#" class="fab fa-facebook" style="color: #4267B2;"></a>
            <a href="#" class="fab fa-instagram" style="color: #517fa4;"></a>
            <a href="#" class="fab fa-twitter" style="color: #1DA1F2;"></a>
        </div>
        </article>

        <article class="footer-center">
            <h1>Links</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                    <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </article>
    </section>

    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>