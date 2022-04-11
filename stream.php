<?php
require_once "class/DbConfig.php";
require_once "class/serieinfo.php";
require_once 'class/Update.php';
$serieIns = new SerieInfo();
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="allseries.php">Movies/Series</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a href="profiel.php" style="margin-right: 20px;">Profile</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <iframe style="width: 100%; height: 90vh; margin-bottom: 10vh;" src="https://www.youtube.com/embed/Z1ZQMpp4BdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
    <section id="item-info">
        <article>
            <img src="img/00001.jpg" alt="" height="300">
        </article>
        <article>
            <h1>Stranger Things</h1>
            <p>When a young boy vanishes, a small town uncovers a mystery involving secret experiments,
                terrifying supernatural forces, and one strange little girl.
            </p>
            <article style="display: flex; margin-top: 3vh;">
                <article style="flex: 0.15;">
                    <p>Country:</p>
                    <p>Genre:</p>
                    <p>Released:</p>
                    <p>Production:</p>
                    <p>Casts:</p>
                </article>
                <article style="flex: 1;">
                    <p>United States of America</p>
                    <p>Drama, Mystery, Sci-Fi & Fantasy</p>
                    <p>2016-07-15</p>
                    <p>21 Laps Entertainment</p>
                    <p>Winona Ryder, David Harbour, Finn Wolfhard, <br>Millie Bobby Brown, Gaten Matarazzo</p>
                </article>
            </article>
        </article>
        <section id="fotos">
            <h3>You May Also Like </h3>
            <section id="flex">
                <?php foreach($serieIns->getSeries() as $serie){ ?>
                    <article>
                        <a href="#" style="color: white;">
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

    <script src="js/slideshow.js"></script>
    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>