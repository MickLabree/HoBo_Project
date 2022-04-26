<?php
require_once 'class/historyinfo.php';


if (isset($_POST['update'])) {

    $update->edit($_POST);

}

session_start();
if(!$_SESSION['ingelogd']){
    header("Location: bezoeker.php");
}

$historyklant = new History();
$_SESSION['KlantID'] = 10003;
$ophalen = $historyklant->getHistory($_SESSION['KlantID']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/history.css">
    <title>HoBo | Contact</title>
</head>
<body>
    
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="zoeken.php"><i class="fas fa-search"></i></a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="allseries.php">Movies/Series</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a class="active" href="profiel.php" style="margin-right: 20px;">Profile</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>





    
<section id="main-history">
<h1>History</h1>
    <section>
        <article>
            <?php
            echo "<p>Title: ".$ophalen[0]->serietitel."</p>";
            echo "<p>".$ophalen[0]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[0]->tijd."</p>";

            echo "<p>Title: ".$ophalen[1]->serietitel."</p>";
            echo "<p>".$ophalen[1]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[1]->tijd."</p>";

            echo "<p>Title: ".$ophalen[2]->serietitel."</p>";
            echo "<p>".$ophalen[2]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[2]->tijd."</p>";

            echo "<p>Title: ".$ophalen[3]->serietitel."</p>";
            echo "<p>".$ophalen[3]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[3]->tijd."</p>";

            echo "<p>Title: ".$ophalen[4]->serietitel."</p>";
            echo "<p>".$ophalen[4]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[4]->tijd."</p>";

            echo "<p>Title: ".$ophalen[5]->serietitel."</p>";
            echo "<p>".$ophalen[5]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[5]->tijd."</p>";
            ?>
        </article>
        <article>
            <?php
            echo "<p>Title: ".$ophalen[6]->serietitel."</p>";
            echo "<p>".$ophalen[6]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[6]->tijd."</p>";

            echo "<p>Title: ".$ophalen[7]->serietitel."</p>";
            echo "<p>".$ophalen[7]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[7]->tijd."</p>";

            echo "<p>Title: ".$ophalen[8]->serietitel."</p>";
            echo "<p>".$ophalen[8]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[8]->tijd."</p>";

            echo "<p>Title: ".$ophalen[9]->serietitel."</p>";
            echo "<p>".$ophalen[9]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[9]->tijd."</p>";

            echo "<p>Title: ".$ophalen[10]->serietitel."</p>";
            echo "<p>".$ophalen[10]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[10]->tijd."</p>";

            echo "<p>Title: ".$ophalen[11]->serietitel."</p>";
            echo "<p>".$ophalen[11]->aflTitel."</p>";
            echo "<p>Tijd: ".$ophalen[11]->tijd."</p>";
            ?>
        </article>
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