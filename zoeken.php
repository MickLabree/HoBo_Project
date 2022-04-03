<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/logo1.png" width="100%">
  <link rel="stylesheet" href="css/zoeken.css">
  <link rel="stylesheet" href="css/global.css">
  <title>HoBo | Home</title>
</head>

<body>

  <!-- main -->
  <form method="POST" action="zoekResultaat.php">
    <input type="text" name="search" placeholder="Search"  onKeyUp='if(this.value==""){document.searchs.search.disabled="disabled";}else{document.searchs.search.disabled="";}' >
    <button type="submit" name="submit-search">Search</button>
  </form>

  <?php
require_once 'class/Zoeken.php';
$serieIns = new Zoeken();
$zoek = new Zoeken();

if(isset($_POST["submit-search"])) {
  foreach($zoek->zoeken($_POST['search']) as $serie){
    echo $serie->SerieTitel . "<br>";
  }
}
?>

<section id="fotos">
            <section id="flex">
                <?php foreach($serieIns->getSerie() as $serie){ ?>
                    <article>
                        <a href="#" style="color: white;">
                            <img src="img/<?= $serieIns->getImageUrl($serie->SerieID); ?>" height="300px" width="200px" alt="" onerror='this.src="img/no-image.png"'>
                            <p><?php echo $serie->SerieTitel; ?></p>
                        </a>
                    </article>
                <?php } ?>
            </section>
  </section>

</body>

</html>