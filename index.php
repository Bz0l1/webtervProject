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
            <img src="./img/main/bigPoster/Avatar2.jpg" alt="poster" id="posterIMG">

            <div class="description">
                <h2 id="mainTitle">Az AVATAR: A VÍZ ÚTJA</h2>

                <div class="categories">
                    <p class="category">Akció</p>
                    <p class="category">Kaland</p>
                    <p class="category">Fantázia</p>
                </div>

                <p>Több mint egy évtizeddel az első rész eseményeit követően meséli el a Sully család (Jake, Neytiri és
                    gyermekeik) történetét; a rájuk leselkedő veszélyeket, az életben maradásért vívott harcaikat, az
                    őket sújtó
                    tragédiákat és azt, meddig képesek elmenni, hogy biztonságban tudhassák egymást.</p>
            </div>
        </a>
    </div>
</main>

<div class="secondary">
    <h2 id="topMusorok">Top műsorok</h2>
    <div class="topmusorok">
        <a href="houseofthedragon.php" target="_blank">
            <img class="firstInTopFilmek" src="./img/posters/HouseOfDragons.jpg" alt="slide">
            <p class="slide-desc">House of the Dragon</p>
        </a>
        <a href="blackadam.php">
            <img class="secondInTopFilmek" src="./img/posters/BlackAdam.jpg" alt="slide">
            <p class="slide-desc">Black Adam</p>
        </a>
        <a href="topgunmaverick.php">
            <img class="thirdInTopFilmek" src="./img/posters/TopGunMaverick.jpg" alt="slide">
            <p class="slide-desc">Top Gun: Maverick</p>
        </a>
        <a href="ringsofpower.php">
            <img class="fourthInTopFilmek" src="./img/posters/RingsOfPower.jpg" alt="slide">
            <p class="slide-desc">Rings of Power</p>
        </a>
    </div>
</div>
</body>
<?php
include("./navbar.php");
?>
</html>