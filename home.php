<?php
require_once "class/DbConfig.php";
require_once "class/serieinfo.php";
require_once 'class/Update.php';
$serieIns = new SerieInfo();
$update = new Update();
session_start();
if(!$_SESSION['ingelogd']){
    header("Location: bezoeker.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
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


            <!-- Slideshow -->
        
        <div class="slideshow-container">

                <div class="mySlides fade">
                <div class="slide-image1"></div>
          <!-- <img class="slideshow-img" src="img/strangerthings.png" style="width:100%"> -->
            <div class="text">
                <h1>Stranger Things</h1>
                <p>
                    In 1980s Indiana, a group of young friends witness supernatural forces and secret government exploits. As they search 
                    for answers, the children unravel a series of extraordinary mysteries.
                </p>
                <a href="#" class="slideshow-button">Add to list <i class="fas fa-heart"></i></a>
                <a href="#" class="slideshow-button">Watch now</a>
            </div>
        </div>

    
        <div class="mySlides fade">
            <div class="slide-image2"></div>
          <!-- <img class="slideshow-img" src="img/strangerthings.png" style="width:100%"> -->
            <div class="text">
                <h1>The Umbrella Academy</h1>
                <p>
                On one day in 1989, 43 infants are inexplicably born to random, unconnected women who showed no signs of pregnancy the day before. 
                Seven are adopted by billionaire industrialist Sir Reginald Hargreeves, who creates the Umbrella Academy and prepares his "children" 
                to save the world.
                </p>
                <a href="#" class="slideshow-button">Add to list <i class="fas fa-heart"></i></a>
                <a href="#" class="slideshow-button">Watch now</a>
            </div>
        </div>
        
        <div class="mySlides fade">
            <div class="slide-image3"></div>
          <!-- <img class="slideshow-img" src="img/thecrown.jpg" style="width:100%"> -->
            <div class="text">
                <h1>The Crown</h1>
                <p>
                    Based on an award-winning play ("The Audience") by showrunner Peter Morgan, this lavish, Netflix-original drama 
                    chronicles the life of Queen Elizabeth II from the 1940s to modern times. The series begins with an inside look 
                    at the early reign of the queen, who ascended the throne at age 25 after the death of her father, King George VI.
                    As the decades pass, personal intrigues, romances, and political rivalries are revealed that played a big role in 
                    events that shaped the later years of the 20th century.
                </p>
                <a href="#" class="slideshow-button">Add to list <i class="fas fa-heart"></i></a>
                <a href="#" class="slideshow-button">Watch now</a>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="slide-image4"></div>
          <!-- <img class="slideshow-img" src="img/lost-in-space.jpg" style="width:100%"> -->
            <div class="text">
                <h1>Narcos: Mexico</h1>
                <p>
                    This continuation of "Narcos" explores the origins of the modern drug war by going back to its roots, 
                    starting at a time when the Mexican trafficking world was a loose, disorganized confederation of independent 
                    growers and dealers. It's the 1980s, and Felix Gallardo takes the helm of the Guadalajara Cartel, unifying 
                    traffickers to build an empire. As DEA agent Kiki Camarena moves his wife and young son from California to 
                    Guadalajara to take on a new post, he learns his assignment is more challenging than he imagined. A tragic 
                    chain of events unfolds as Camarena gains intelligence on Gallardo and becomes more entangled in the mission.
                </p>
                <a href="#" class="slideshow-button">Add to list <i class="fas fa-heart"></i></a>
                <a href="#" class="slideshow-button">Watch now</a>
            </div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>


        <!-- Series -->
        
        

        <section id="fotos">
            <h3>Genre - <?= $_SESSION['genre'] ?></h3>
            <section id="flex">
                <?php foreach($serieIns->getSeriesByGenre($_SESSION['genre']) as $serie){ ?>
                    <article>
                        <a href="afleveringen.php?serie=<?php echo $serie->SerieID ?>&seizoen=1" style="color: white;">
                            <div class="container">
                                <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                            <div class="overlay">
                                <div class="serieinfo"><?php  echo' Titel: '. $serie->SerieTitel;?></div>
                            </div>
                            </div>
                            <p><?php  echo' Titel: '. $serie->SerieTitel.'<br> Rating: <i class="fas fa-star" style="color:gold;"></i> ';  echo $serie->IMDBRating; ?>/5</p>
                        </a>
                    </article>
                <?php } ?>
            </section>
        </section>

        <section id="fotos">
            <h3>All Movies/Series </h3>
            <section id="flex">
                <?php foreach($serieIns->getSerie() as $serie){ ?>
                    <article>
                        <a href="afleveringen.php?serie=<?php echo $serie->SerieID ?>&seizoen=1" style="color: white;">
                        <div class="container">
                            <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                            <div class="overlay">
                                <div class="serieinfo"><?php  echo' Titel: '. $serie->SerieTitel;?></div>
                            </div>
                            </div>
                            <p><?php  echo' Titel: '. $serie->SerieTitel.'<br> Rating: <i class="fas fa-star" style="color:gold;"></i> ';  echo $serie->IMDBRating; ?>/5</p>
                        </a>
                    </article>
                <?php } ?>
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