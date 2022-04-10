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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>HoBo | Contact</title>
</head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="zoeken.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a href="#">Series</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="profiel.php" style="margin-right: 20px;"><i class="fa-solid fa-user"></i></a><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>


    




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

    <script src="js/slideshow.js"></script>
    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>