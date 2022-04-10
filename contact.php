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

    <section>
        <!-- <img src="img/logo.png" alt="Logo" height="100"> -->
        <article>
            
        </article>
    </section>

      <!-- Zoeken -->
      <section class="test">
      <img src="img/logo.png" alt="Logo" height="100">
            <section id="search-box">
            <h1>Zoeken</h1>
            <form class="item-search-box" method="POST" action="zoeken.php">
                <input class="search-input" type="text" name="search" placeholder="Zoeken" required>
                <button class="search-btn" type="submit" name="submit-search" value="Zoeken"><i class="fas fa-search"></i></button>
            </form>
            </section>
        </section>



    <section id="item-overons">
        <h1>About Us</h1>
        <article>
            <h3>Watch Free Movies with nothing</h3>
            <p>
                Hobo simply provides you paid HD movies with any registration. Despite our huge database of over 
                68,000 titles, you can always request us for any movie/serie you want to watch. Moreover, if you prefer subtitles, 
                our team has made them available for you in various languages in every single movie uploaded.
            </p>
        </article>
        <article>
            <h3>What is Hobo?</h3>
            <p>
                Hobo is your Paid movies website to watch series and film. We offer you quick access, with registration,
                to more than 50,000 movies and 10,000 TV shows at no cost. Our titles, with a wide range of genres such as Sci-fi,
                Comedy, Romance,… are updated daily by our data team to make sure you will not miss any trending movies and shows.
                Blockbusters and rare gems are also available on Hobo after several hours after its first release in the cinema.
            </p>
        </article>
        <article>
            <h3>Is Hobo safe?</h3>
            <p>
                Nowadays, safety is our #1 concern when we go online, especially websites with paid movies like 
                Netflix. Hackers can even track your on-screen navigation and steal your information,… 
                Hence it is best to stay away from those sites showering you with ads, requiring registration and software update.
                Here at Hobo, we want to keep you safe by making it almost ad-free, registration free and 
                completely free of charge. That said, you can aid your protection by using a reliable VPN and AdBlock 
                extension when going online. And please remember to stay away from website likes Netflix 
                because they asked you to sign up just to watch free movies, they may use your email to do email marketing 
                or somethings worse. 
                Besides all the features stated above, we are also going far and beyond with the followings:
                - Real multi HD resolutions. 
                - Many subtitles option on Multi-language selection.
                - Premium service from a secure and private streaming source. 
                - Fast daily updates.
                - Clean and professional user interface. 
                - Mobile-friendly and Chromecast supported. 
                - Strictly controlled ads and no registration. 
                - Huge content library with daily update.
            </p>
        </article>
        <article style="text-align: left;">
            <h3 style="text-align: center;">Netflix Good Hobo</h3>
            <p>
            1.Rush: It's Thor and Baron Zemo, look! In Ron Howard's 2013 film about Formula One motor racing, Chris Hemsworth and Daniel Brühl play competitors in the famed rivalry between British James Hunt and Austrian Niki Lauda. The racing scenes are well-made, but it's Brühl's acting that makes this film worth seeing. It's his greatest effort to date in his illustrious career.<br>
            2.Titanic: Do you recall when this was the world's most popular film? Titanic is a truly great piece of epic cinema, pushing into the idea that a blockbuster can transport you in ways that no other media can, but James Cameron's epic became something of a punchline for individuals who want to make fun of melodrama.<br>
            3.Zodiac: The consequences of crime, not crime itself, is the focus of David Fincher's masterwork. The fact that he crafted a lengthy epic about an unsolved murder is bold enough. But what's most fascinating is how the film gradually shifts away from figuring out who the Zodiac Killer is and toward examining the consequences of obsession. It's one of the decade's greatest flicks.<br>
            4.Crimson Peak: Guillermo del Toro's gothic horror movie has a cult following almost immediately after its debut. Sure, popular audiences expecting a frightening movie in October didn't get it, but it swiftly gained a following. After all, it's a stunning, memorable work of art that serves as a reminder that del Toro's vision is unlike anybody else's. Replay the scene. It's one of those films that everyone will claim to have adored from the start.<br>
            5.As Good As It Gets: As Good as It Gets is a romantic comedy-drama film directed by James L. Brooks and co-written by Mark Andrus, released in 1997. Jack Nicholson portrays a misanthropic, homophobic, and obsessive-compulsive author, Helen Hunt portrays a single mother with a chronically ill kid, and Greg Kinnear portrays a gay artist in the film.
            </p>
        </article>
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

    <script src="js/slideshow.js"></script>
    <script src="https://kit.fontawesome.com/148dcfd780.js" crossorigin="anonymous"></script>
</body>
</html>