<?php
require_once 'class/Update.php';

$update = new Update();

if (isset($_POST['update'])) {

    $update->edit($_POST);

}
session_start();
if(!$_SESSION['ingelogd']){
    header("Location: login.php");
}

$user = $update->getUpdate($_SESSION['email']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                <li><a href="#">Contact</a></li>
                <li><a class="active" href="profiel.php" style="margin-right: 20px;"><i class="fa-solid fa-user"></i></a><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
                <link rel="stylesheet" href="css/profiel.css">
                <link rel="stylesheet" href="css/global.css">
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
                        <option name="Genre" value='1'><?php echo $user[0]->Genre;?></option>
                        <option name="extra" value="2">Extra Paket</option>
                        <option name="platinum" value="3">Platinum Paket</option>
                    </select>
                    <input type="text" value='<?php echo $user[0]->Genre;?>' name="Genre" placeholder="Genre">
                </article>
                <article class="item-info2">
                    <p>Email</p>
                    <input type="text" value='<?php echo $user[0]->Email;?>' name="Email" placeholder="Email">
                    <p>Wachtwoord</p>
                    <input type="text" name="Password" placeholder="Wachtwoord">
                    <input type="submit" name="update" value="Update">
                </article>
                
            </form>
        </section>

                <?php foreach($update->getGenre() as $Genre){ ?>
                    <article>
                            <p style="color: white;"><?php echo $Genre->GenreNaam; ?></p>
                    </article>
                <?php } ?>



    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>