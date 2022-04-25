<?php
require_once "class/serieinfo.php";
// require_once "class/User.php";
session_start();
if(!$_SESSION['ingelogd']){
    header("Location: bezoeker.php");
}
$aflevering = new SerieInfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/afleveringen.css">
    <link rel="stylesheet" href="css/global.css">
    <title>Document</title>
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

        <!-- Afleveringen -->
        <section id="fotos">
            <h3> Afleveringen </h3>
            <section id="flex">
                <?php foreach ($aflevering->getAfleveringen($_GET["serie"], $_GET["seizoen"]) as $afleveringen){ ?>
                    <article>
                        <a style="color: white;" href="stream.php?serie=<?php echo $afleveringen->SerieID ?>&seizoen=1">
                            <img src="img/<?= $aflevering->getImageUrl($afleveringen->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                            <p><?php echo $afleveringen->SerieTitel.":<br>"; echo $afleveringen->AflTitel;?></p>
                        </a>
                    </article>
                <?php } ?>
            </section>
        </section>

        <!-- Seizoenen -->

        <section id="fotos">
            <h3>Seizoenen</h3>
            <section id="flex">
                <?php foreach ($aflevering->getSeasonOfSerie($_GET["serie"]) as $seizoen){ ?>
                    <article>
                    <a style="color: white;" href="afleveringen.php?serie=<?php echo $_GET['serie'] ?>&seizoen=<?php echo $seizoen->Rang ?>">
                        <img src="img/<?= $aflevering->getImageUrl($afleveringen->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                        <?php echo $seizoen->SerieTitel.":<br>Seizoen "; echo $seizoen->Rang; ?>
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
    
    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>