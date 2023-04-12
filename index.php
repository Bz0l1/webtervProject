<?php
// Betöltjük a JSON fájl tartalmát egy változóba
$jsonData = file_get_contents('db/filmek.json');

// JSON adatok átalakítása PHP tömbbe
$data = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmVerzum</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleMain.css">
    <link rel="stylesheet" href="styles/styleLogin.css">
    <script src="scripts/script.js"></script>
</head>

<?php
include("./navbar.php");
?>

<body>
<main class="main">
    <h1 id="filmVerzum">FilmVerzum</h1>
    <div class="mainPart">

        <a href="secondpage.php?valtozo=0" class="poster">
            <img src="<?php echo $data['movies'][0]['mainPosterURL']; ?>" alt="poster" id="posterIMG">

            <div class="description">
                <h2 id="mainTitle"><?php echo $data['movies'][0]['title']; ?></h2>

                <div class="categories">
                    <?php foreach ($data['movies'][0]['tags'] as $genre) {
                        echo $genre . '  ';
                    } ?>
                </div>

                <p><?php echo $data['movies'][0]['description']; ?></p>
            </div>
        </a>
    </div>
</main>

<div class="secondary">
    <h2>Top műsorok</h2>
    <div class="topmusorok">
        <a href="secondpage.php?valtozo=2">
            <img src="<?php echo $data['movies'][2]['posterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="secondpage.php?valtozo=1">
            <img src="<?php echo $data['movies'][1]['posterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="secondpage.php?valtozo=5">
            <img src="<?php echo $data['movies'][5]['posterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="secondpage.php?valtozo=4">
            <img src="<?php echo $data['movies'][4]['posterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="secondpage.php?valtozo=3">
            <img src="<?php echo $data['movies'][3]['posterURL']; ?>" alt="poster" class="top-poster">
        </a>
    </div>
</div>

</body>
<?php
include("./footer.php");
?>
</html>