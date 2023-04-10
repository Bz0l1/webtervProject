<?php
// Betöltjük a JSON fájl tartalmát egy változóba
$jsonData = file_get_contents('filmDB/filmek.json');

// JSON adatok átalakítása PHP tömbbe
$data = json_decode($jsonData, true);

$link = $data['movies'][0]['trailerUrl'];
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

        <a href="avatar.php" class="poster">
            <img src="<?php echo $data['movies'][0]['mainPosterURL']; ?>" alt="poster" id="posterIMG">

            <div class="description">
                <h2 id="mainTitle"><?php echo $data['movies'][0]['title']; ?> </h2>

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
        <a href="houseofthedragon.php">
            <img src="<?php echo $data['movies'][2]['mainPosterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="blackadam.php">
            <img src="<?php echo $data['movies'][1]['mainPosterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="topgunmaverick.php">
            <img src="<?php echo $data['movies'][4]['mainPosterURL']; ?>" alt="poster" class="top-poster">
        </a>
        <a href="ringsofpower.php">
            <img src="<?php echo $data['movies'][3]['mainPosterURL']; ?>" alt="poster" class="top-poster">
        </a>
    </div>
</div>

</body>
<?php
include("./footer.php");
?>
</html>