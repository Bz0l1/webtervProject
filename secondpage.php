<?php
$valtozo = $_GET['valtozo'];
$jsonData = file_get_contents('db/filmek.json');

// JSON adatok átalakítása PHP tömbbe
$data = json_decode($jsonData, true);

$link = $data['movies'][$valtozo]['trailerUrl'];
$video = '<iframe width="813" height="508" src="https://www.youtube.com/embed/'.$link.' " title="A film trailere" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['movies'][$valtozo]['title']; ?></title>
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <link rel="stylesheet" href="styles/styleFilmpages.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleLogin.css">
    <script src="scripts/script.js"></script>
</head>

<?php
include("./navbar.php");
?>

<body>

<main class="main">
    <div class="mainPart">
        <h1><?php echo $data['movies'][$valtozo]['title']; ?></h1>
        <div class="szoveg"> <?php echo $data['movies'][$valtozo]['description']; ?><br></div>
        <div class="video-container">
            <?php echo $video ?>
            <img src="<?php echo $data['movies'][$valtozo]['posterURL']; ?>" alt="A film borítóképe"/>
        </div>
    </div>

    <div class="secondary">
        <div class="tables">
            <table class="tableFilmek">
                <caption>A film adatai:</caption>
                <tr>
                    <th class=firstcolumn id="originalTitle">Eredeti cím:</th>
                    <th class=secondcolumn
                        id="originalTitleValue"><?php echo $data['movies'][$valtozo]['originalTitle']; ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="genre">Műfaj:</th>
                    <th class=secondcolumn id="genreValue"><?php foreach ($data['movies'][$valtozo]['tags'] as $index => $genre) {
                            echo $data['movies'][$valtozo]['tags'][$index];
                            if ($index !== count($data['movies'][$valtozo]['tags']) - 1) {
                                echo ', ';
                            }
                        } ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="premier">Bemutató ideje:</th>
                    <th class=secondcolumn id="premierValue"><?php echo $data['movies'][$valtozo]['premier']; ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="watchTime">Játékidő:</th>
                    <th class=secondcolumn id="watchTimeValue"><?php echo $data['movies'][$valtozo]['watchTime']; ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="stars">Főszereplők:</th>
                    <th class=secondcolumn
                        id="starsValue"><?php foreach ($data['movies'][$valtozo]['actors'] as $index => $actor) {
                            echo $data['movies'][$valtozo]['actors'][$index];
                            if ($index !== count($data['movies'][$valtozo]['actors']) - 1) {
                                echo ', ';
                            }
                        } ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="ageLimit">Korhatár:</th>
                    <th class=secondcolumn id="ageLimitValue"><?php echo $data['movies'][$valtozo]['ageLimit']; ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="director">Rendezők:</th>
                    <th class=secondcolumn
                        id="directorValue"><?php foreach ($data['movies'][$valtozo]['directors'] as $index => $directors) {
                            echo $data['movies'][$valtozo]['directors'][$index];
                        } ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="production">Gyártó:</th>
                    <th class=secondcolumn id="productionValue"><?php foreach ($data['movies'][$valtozo]['production'] as $index => $production) {
                            echo $data['movies'][$valtozo]['production'][$index];
                            if ($index !== count($data['movies'][$valtozo]['production']) - 1) {
                                echo ', ';
                            }
                        } ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="distributor">Forgalmazó:</th>
                    <th class=secondcolumn id="distributorValue"><?php echo $data['movies'][$valtozo]['distributor']; ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="language">Eredeti nyelv:</th>
                    <th class=secondcolumn id="languageValue"><?php echo $data['movies'][$valtozo]['language']; ?></th>
                </tr>
            </table>
            <!--
            <div class="commentSection">
                <h2>Hozzászólások</h2>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Kiss József</a>
                        <span class="comment-date">2023. március 19., 12:30</span><br>
                        <p>Borzalmas, túl hosszú és unalmas. Nem éri meg megnézni. Csalódás...</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Mészáros Tamás</a>
                        <a class="comment-date">2023. március 19., 13:00</a><br>
                        <p>Nekem nagyon tetszett, lehetne kicsivel rövidebb de szerintem így is megéri végigülni.</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Te</a><br>
                        <form>
                            <label for="felhasznalovelemenye"></label><textarea placeholder="Írd le a véleményed!"
                                                                                id="felhasznalovelemenye"
                                                                                name="valodicomment"
                                                                                maxlength="200"></textarea> <br/>
                            <input type="reset" id="submit-btn" value="Küldés"/>
                        </form>
                    </div>
                </div>
            </div>
            -->
            <div class="photo-gallery">
                <img class="firsInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][1]; ?>" alt="Film kép 1"/>
                <img class="secondInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][2]; ?>" alt="Film kép 2"/>
                <img class="thirdInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][3]; ?>" alt="Film kép 3"/>
                <img class="fourthInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][4]; ?>" alt="Film kép 4"/>
            </div>
</main>
</body>
<?php
include("./footer.php");
?>
</html>