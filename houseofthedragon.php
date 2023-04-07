<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Sárkányok háza</title>
    <link rel="stylesheet" href="styles/styleFilmpages.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<?php
include("./navbar.php");
?>

<body>
    <main class="main">
        <div class="mainPart">
            <h1>Sárkányok háza</h1>
            <div class = "szoveg"> Egy belső trónharc a Targaryen Házban a hatalma csúcsán, Daenerys Targaryen születése
                előtt 172 évvel.<br></div>
            
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/JOXj6CHQPYI" allowfullscreen></iframe><br>
                <img src="./img/posters/HouseOfDragons.jpg" alt="HouseOfDragons"/>
            </div>
        </div>
        
        <div class="secondary">
            <table class="tableFilmek">
                <caption>A sorozat adatai:</caption>
                <tr>
                    <th class = firstcolumn id="originalTitle">Eredeti cím: </th>
                    <th class = secondcolumn id="originalTitleValue">House of the Dragon</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="genre">Műfaj: </th>
                    <th class = secondcolumn id="genreValue">Akció, Kaland, Dráma</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="premier">Bemutató ideje: </th>
                    <th class = secondcolumn id="premierValue">2022. augusztus 2.</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="seasons">Évadok száma: </th>
                    <th class = secondcolumn id="seasonsValue">1</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="episodes">Epizódok száma: </th>
                    <th class = secondcolumn id="episodesValue">10</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="stars">Főszereplők: </th>
                    <th class = secondcolumn id="starsValue">Rhys Ifans, Matt Smith, Fabien Frankel</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="ageLimit">Korhatár: </th>
                    <th class = secondcolumn id="ageLimitValue">18+</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="director">Rendező: </th>
                    <th class = secondcolumn id="directorValue">Greg Yaitanes, Miguel Sapochnik</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="writer">Író: </th>
                    <th class = secondcolumn id="writerValue">George R. R. Martin, Ryan Condal, Sara Hess,
                        Charmaine DeGraté</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="distributor">Forgalmazó: </th>
                    <th class = secondcolumn id="distributorValue">HBO</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="language">Nyelv: </th>
                    <th class = secondcolumn id="languageValue">Angol</th>
                </tr>
            </table>

            <div class="commentSection">
                <h2>Hozzászólások</h2>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Kiss József</a>
                        <span class="comment-date">2023. március 16., 10:30</span><br>
                        <p>Nagyon jó!! Minden percet megér.</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Kiss Zsanett</a>
                        <a class="comment-date">2023. március 17., 15:00</a><br>
                        <p>Életem legjobb sorozata!!</p>
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
                <img class="firsInGalley" src="./img/filmPage/houseofthedragon/houseofthedragon5.jpg" alt="Sárkányok háza 1. kép"/>
                <img class="secondInGalley" src="./img/filmPage/houseofthedragon/houseofthedragon3.jpg" alt="Sárkányok háza 2. kép"/>
                <img class="thirdInGalley" src="./img/filmPage/houseofthedragon/houseofthedragon4.jpg" alt="Sárkányok háza 3. kép"/>
                <img class="fourthInGalley" src="./img/filmPage/houseofthedragon/houseofthedragon2.jpeg" alt="Sárkányok háza 4. kép"/>
            </div>

            <div class="comment">
                A sorozat előzménye a Trónok harca (2011–2019) című televíziós sorozatnak, és Martin: A tűz és jég dala
                című regénysorozatán alapul.<br>
                * A műsor megtekintése HBO Max-on lehetséges, amihez előfizetés szükséges.<br>
            </div>
        </div>
    </main>
</body>
<?php
include("./footer.php");
?>
</html>