<?php
require_once 'class/Update.php';

$update = new Update();

if (isset($_POST['update'])) {

    $update->edit($_POST);

}

session_start();
if(!$_SESSION['ingelogd']){
    header("Location: bezoeker.php");
}

$user = $update->getUpdate($_SESSION['email']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/profiel.css">
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

        <section class="profile">
            <form class="item-info" method="post">
                <article  class="item-info1">
                    <p>Voornaam</p>
                    <input type="text" value='<?php echo $user[0]->Voornaam;?>' name="Voornaam" placeholder="Voornaam">
                    <p>Tussenvoegsel</p>
                    <input type="text" value='<?php echo $user[0]->Tussenvoegsel;?>' name="Tussenvoegsel" placeholder="Tussenvoegsel">
                    <p>Achternaam</p>
                    <input type="text" value='<?php echo $user[0]->Achternaam;?>' name="Achternaam" placeholder="Achternaam">
                    <p>Genres</p>
                    <select name="option" class="pakket">
                        <option><?php echo $user[0]->Genre;?></option>
                        <?php foreach($update->getGenre() as $Genre){ ?>
                        <article>
                                <option name="Genre"><?php echo $Genre->GenreNaam; ?></option>
                        </article>
                        <?php } ?>
                    </select>
                </article>
                <article class="item-info2">
                    <p>Email</p>
                    <input type="text" value='<?php echo $user[0]->Email;?>' name="Email" placeholder="Email">
                    <p>Wachtwoord</p>
                    <input type="password" name="Password" placeholder="Wachtwoord" required>
                    <input type="submit" name="update" value="Update">
                </article>
                
                
            </form>
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