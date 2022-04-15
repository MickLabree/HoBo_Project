<?php
require_once "class/DbConfig.php";
require_once "class/serieinfo.php";
require_once 'class/Update.php';
$serieIns = new SerieInfo();
$aflevering = new SerieInfo();
$update = new Update();
// session_start();
// if(!$_SESSION['ingelogd']){
//     header("Location: bezoeker.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stream.css">
    <link rel="stylesheet" href="css/global.css">
    <title>HoBo | Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="zoeken.php"><i class="fas fa-search"></i></a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="allseries.php">Movies/Series</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a href="profiel.php" style="margin-right: 20px;">Profile</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <video style="width: 100%; height: 80vh;" controls>
        <source src="img/Stranger.mp4">
    </video>

    <section id="item-info">
        <section id="fotos">
            <section id="flex">
                <?php foreach ($aflevering->getLigma($_GET["serie"]) as $afleveringen){ ?>
                    <article>
                            <img src="img/<?= $aflevering->getImageUrl($afleveringen->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                    </article>
                <?php } ?>
            </section>
        </section>
        
        <article style="flex: 1.5;">
            <h1><?php echo $afleveringen->SerieTitel;?></h1>
            <article style="display: flex; margin-top: 3vh;">
                <article style="flex: 0.5;">
                    <p>Seizoen:</p>
                    <p>Jaar:</p>
                    <p>IMDBRating <i class='fas fa-star' style='color:gold;'></i>:</p>
                    <p>Duur:</p>
                </article>
                <article style="flex: 1;">
                <p><?php echo $afleveringen->Rang;?></p>
                <p><?php echo $afleveringen->Jaar;?></p>
                <p><?php echo $afleveringen->IMDBRating;?></p>
                <p><?php echo $afleveringen->Duur;?> min</p>
                </article>
            </article>
        </article>
        <section id="fotos" style="flex: 1.5;">
            <h3>You May Also Like </h3>
            <section id="flex">
                <?php foreach($serieIns->getSeries() as $serie){ ?>
                    <article>
                        <a href="afleveringen.php?serie=<?php echo $serie->SerieID ?>&seizoen=1" style="color: white;">
                            <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="250px" alt="" onerror='this.src="img/no-image.png"'>
                            <p><?php echo $serie->SerieTitel; ?></p>
                        </a>
                    </article>
                <?php } ?>
            </section>
        </section>
    </section>


        


    <!-- footer -->

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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="allseries.php">Movies/Series</a></li>
                    <li><a href="profiel.php" style="margin-right: 20px;">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul>
                <li><a href="home.php">Home</a></li>
                    <li><a href="allseries.php">Movies/Series</a></li>
                    <li><a href="profiel.php" style="margin-right: 20px;">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                    <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="allseries.php">Movies/Series</a></li>
                    <li><a href="profiel.php" style="margin-right: 20px;">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </article>
    </section>

    <script src="js/slideshow.js"></script>
    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>