<?php
require_once 'class/Update.php';

$update = new Update();

if (isset($_POST['update'])) {

    $update->edit($_POST);

}
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
                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><img style="margin: 0;" src="img/logo.png" height="60" alt="Logo"></li>
                <li><a href="#">Series</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" style="margin-right: 20px;"><i class="fa-solid fa-user"></i></a><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
                <link rel="stylesheet" href="css/voorkeur.css">
                <link rel="stylesheet" href="css/global.css">
            </ul>
        </nav>
    </header>

        <section class="profile">
            <form class="item-info" method="post">
                <article  class="item-info1">
                    <p>Klant Numer</p>
                    <input type="text" name="KlantNr" placeholder="KlantNr">
                    <p>Voornaam</p>
                    <input type="text" name="Voornaam" placeholder="Voornaam">
                    <p>Achternaam</p>
                    <input type="text" name="Achternaam" placeholder="Achternaam"><br>
                </article>
                <article class="item-info2">
                    <p>Email</p>
                    <input type="text" name="Email" placeholder="Email"><br>
                    <p>Wachtwoord</p>
                    <input type="text" name="Password" placeholder="Wachtwoord"><br>
                    <input type="submit" name="update" value="Update">
                </article>
                
            </form>
        </section>



    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>