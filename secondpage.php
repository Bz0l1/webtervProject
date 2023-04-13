<?php
session_start();
$valtozo = $_GET['valtozo'];
$jsonData = file_get_contents('db/filmek.json');

// JSON adatok átalakítása PHP tömbbe
$data = json_decode($jsonData, true);

$link = $data['movies'][$valtozo]['trailerUrl'];
$video = '<iframe width="813" height="508" src="https://www.youtube.com/embed/' . $link . ' " title="A film trailere" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
include_once('./includes/include.profilPicture.php');

function load_user_data($username)
{
    $filename = './db/users.txt';

    $file_contents = file_get_contents($filename);
    $users = explode(PHP_EOL, $file_contents);

    foreach ($users as $user) {
        $user_data = explode(';', $user);

        if ($username === $user_data[0]) {
            return $user_data;
        }
    }

    return null;
}

if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    $user_data = load_user_data($username);
}

$profile_picture_path = get_profile_pictureProfil_path($username);
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $data['movies'][$valtozo]['title']; ?>
    </title>
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <link rel="stylesheet" href="styles/styleFilmpages.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>
</head>

<?php
include("./navbar.php");
?>

<body>

<main class="main">
    <div class="mainPart">
        <h1>
            <?php echo $data['movies'][$valtozo]['title']; ?>
        </h1>
        <div class="szoveg">
            <?php echo $data['movies'][$valtozo]['description']; ?><br>
        </div>
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
                    <th class=secondcolumn
                        id="genreValue"><?php foreach ($data['movies'][$valtozo]['tags'] as $index => $genre) {
                            echo $data['movies'][$valtozo]['tags'][$index];
                            if ($index !== count($data['movies'][$valtozo]['tags']) - 1) {
                                echo ', ';
                            }
                        } ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="premier">Bemutató ideje:</th>
                    <th class=secondcolumn id="premierValue">
                        <?php echo $data['movies'][$valtozo]['premier']; ?>
                    </th>
                </tr>
                <tr>
                    <th class=firstcolumn id="watchTime">Játékidő:</th>
                    <th class=secondcolumn id="watchTimeValue"><?php echo $data['movies'][$valtozo]['watchTime']; ?>
                    </th>
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
                    <th class=secondcolumn id="ageLimitValue">
                        <?php echo $data['movies'][$valtozo]['ageLimit']; ?>
                    </th>
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
                    <th class=secondcolumn
                        id="productionValue"><?php foreach ($data['movies'][$valtozo]['production'] as $index => $production) {
                            echo $data['movies'][$valtozo]['production'][$index];
                            if ($index !== count($data['movies'][$valtozo]['production']) - 1) {
                                echo ', ';
                            }
                        } ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="distributor">Forgalmazó:</th>
                    <th class=secondcolumn
                        id="distributorValue"><?php echo $data['movies'][$valtozo]['distributor']; ?></th>
                </tr>
                <tr>
                    <th class=firstcolumn id="language">Eredeti nyelv:</th>
                    <th class=secondcolumn id="languageValue">
                        <?php echo $data['movies'][$valtozo]['language']; ?>
                    </th>
                </tr>
            </table>

            <div class="commentSection">
                <h2>Hozzászólások</h2>
                <?php
                for ($index = 0; $index < count($data['movies'][$valtozo]['comments']); $index++) {
                    $comment = $data['movies'][$valtozo]['comments'][$index];
                    $commentName = $comment['name'];
                    $commentDate = $comment['commentDate'];
                    $commentText = $comment['comment'];
                    $commentPicture = $comment['profilePicture'];
                    echo '
                    <div class="fullRealComment">
                        <img class="userAvatar" src= ' . $commentPicture . ' alt="Felhasználó avatarja">
                        <div class="comment-body">
                            <a class="userRealName">' . $commentName . '</a>
                            <span class="comment-date">' . $commentDate . '</span><br>
                            <p>' . $commentText . '</p>
                            <br><br>
                        </div>
                    </div>';
                }
                // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
                if (isset($_SESSION['bejelentkezve']) && $_SESSION['bejelentkezve']) {
                    echo '
                    <div class="fullRealComment">
                        <img class="userAvatar" src="' . $profile_picture_path . '" alt="Felhasználó avatarja">
                        <div class="comment-body">
                            <a class="userRealName">' . $username . '</a><br>
                            <form action="includes/include.handle_comment.php" method="post">
                            <label for="felhasznalovelemenye"></label>
                                <textarea placeholder="Írd le a véleményed!"
                                    id="felhasznalovelemenye"
                                    name="valodicomment"
                                    maxlength="200"></textarea>
                                    <input type="hidden" name="valtozo" value="<?php echo $valtozo; ?>"><br>
                                    <input type="submit" id="submit-btn" value="Küldés"/>
                            </form>
                        </div>
                    </div>';

                } else {
                    echo '<div class="comment-body">
                            <p>
                                <a class="login-link" href="#" onclick="document.getElementById(\'id01\').style.display=\'flex\'">Jelentkezz be</a>
                                    vagy
                                <a class="login-link" href="#" onclick="document.getElementById(\'registration\').style.display=\'flex\'">regisztrálj</a>
                                    a hozzászóláshoz!
                            </p>
                           </div>';
                }
                ?>
            </div>


            <div class="photo-gallery">
                <img class="firsInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][1]; ?>"
                     alt="Film kép 1"/>
                <img class="secondInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][2]; ?>"
                     alt="Film kép 2"/>
                <img class="thirdInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][3]; ?>"
                     alt="Film kép 3"/>
                <img class="fourthInGalley" src="<?php echo $data['movies'][$valtozo]['pictures'][4]; ?>"
                     alt="Film kép 4"/>
            </div>
        </div>
    </div>
</main>
</body>
<?php
include("./footer.php");
?>

</html>