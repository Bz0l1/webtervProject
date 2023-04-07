<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Top Gun: Maverick</title>
    <link rel="stylesheet" href="styles/styleFilmpages.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<?php
include("./navbar.php");
?>

<body>
    <main class="main">
        <div class="mainPart">
            <h1>Top Gun: Maverick</h1>
            <div class="szoveg">30 év elteltével Maverick még mindig határait feszegeti az egyik legjobb tengerészeti
                pilótaként, de szembe kell néznie múltjának kísérteteivel, amikor vezeti a TOP GUN elit végzősait egy
                küldetésen, amely azon a feltételen áll, hogy az arra kiválasztottak készek legyenek az
                ultimátum áldozatára.<br>
            </div>

            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/VxGR3l_BYyI" allowfullscreen></iframe><br>
                <img src="./img/posters/TopGunMaverick.jpg" alt="Top Gun: Maverick"/>

            </div>
        </div>

        <div class="secondary">
            <table class="tableFilmek">
                <caption>A film adatai:</caption>
                <tr>
                    <th class = firstcolumn id="genre">Műfaj: </th>
                    <th class = firstcolumn id="genreValue">Akció, Dráma</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="premier">Bemutató ideje: </th>
                    <th class = firstcolumn id="premierValue">2022. május 26.</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="watchTime">Játékidő: </th>
                    <th class = firstcolumn id="watchTimeValue">131 perc</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="stars">Főszereplők: </th>
                    <th class = firstcolumn id="starsValue">Tom Cruise, Jennifer Connelly, Miles Teller</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="ageLimit">Korhatár: </th>
                    <th class = firstcolumn id="ageLimitValue">12+</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="director">Rendező: </th>
                    <th class = firstcolumn id="directorValue">Joseph Kosinski</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="writer">Író: </th>
                    <th class = firstcolumn id="writerValue">Jim Cash, Jack Epps Jr., Peter Craig</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="producer">Producerek: </th>
                    <th class = firstcolumn id="producerValue">Jerry Bruckheimer, Tom Cruise, Christopher McQuarrie</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="manufacturer">Gyártó: </th>
                    <th class = firstcolumn id="manufacturerValue">Skydance Media, Don Simpson/Jerry
                        Bruckheimer Films</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="distributor">Forgalmazó: </th>
                    <th class = firstcolumn id="distributorValue">Paramount Pictures</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="hunDistributor">Magyar forgalmazó: </th>
                    <th class = firstcolumn id="hunDistributorValue">UIP-Duna</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="language">Eredeti nyelv: </th>
                    <th class = firstcolumn id="languageValue">Angol</th>
                </tr>
            </table>

            <div class="commentSection">
                <h2>Hozzászólások</h2>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Bakacsi Ferenc</a>
                        <span class="comment-date">2023. március 19., 03:30</span><br>
                        <p>Az akciójelenetek nagyon tetszettek, azokon kívül egy átlagos folm.</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Kozma Bianka</a>
                        <a class="comment-date">2023. március 19., 12:15</a><br>
                        <p>Hosszú idő óta végre egy film amiért érdemes moziba menni.</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Te</a><br>
                        <form>
                        <label for="felhasznalovelemenye"></label><textarea placeholder="Írd le a véleményed!" id="felhasznalovelemenye" name="valodicomment" maxlength="200"></textarea> <br/>
                        <input type="reset" id="submit-btn" value="Küldés"/>
                        </form>
                    </div>
                </div>
            </div>

            <div class="photo-gallery">
                <img class="firsInGalley" src="./img/filmPage/topgun/topgun5.jpg" alt="Topgun: Maverick 1. kép"/>
                <img class="secondInGalley" src="./img/filmPage/topgun/topgun3.jpg" alt="Topgun: Maverick 2. kép"/>
                <img class="thirdInGalley" src="./img/filmPage/topgun/topgun4.jpg" alt="Topgun: Maverick 3. kép"/>
                <img class="fourthInGalley" src="./img/filmPage/topgun/topgun2.jpg" alt="Topgun: Maverick 4. kép"/>
            </div>
        </div>
    </main>
</body>
<?php
include("./footer.php");
?>
</html>