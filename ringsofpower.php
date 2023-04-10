<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>A gyűrűk ura: Hatalom gyűrűi</title>
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
            <h1>A gyűrűk ura: Hatalom gyűrűi</h1>
            <div class="szoveg"> Epikus dráma, amely több ezer évvel az események előtt játszódik J.R.R. Tolkien
                "A hobbit" és "A Gyűrűk Ura" című művei előtt. Egy szereplőgárda követi az ismert és új karaktereket,
                ahogy szembenéznek a középföldi gonosz régóta féltett újra feltűnésével.<br></div>

            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/gvzQyo_jBqI" allowfullscreen></iframe><br>
                <img src="./img/posters/RingsOfPower.jpg" alt="A gyűrűk ura: Hatalom gyűrűi"/>
            </div>
        </div>

        <div class="secondary">
            <table class="tableFilmek">
                <caption>A sorozat adatai:</caption>
                <tr>
                <th class = firstcolumn id="originalTitle">Eredeti cím: </th>
                <th class = secondcolumn id="originalTitleValue">The Lord of the Rings: The Rings of Power</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="genre">Műfaj: </th>
                    <th class = secondcolumn id="genreValue">Dráma, Fantázia, Kaland, Akció</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="premier">Bemutató ideje: </th>
                    <th class = secondcolumn id="premierValue">2022. szeptember 2.</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="seasons">Évadok száma: </th>
                    <th class = secondcolumn id="seasonsValue">1</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="episodes">Epizódok száma: </th>
                    <th class = secondcolumn id="episodesValue">8 *</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="stars">Főszereplők: </th>
                    <th class = secondcolumn id="starsValue">Robert Aramayo, Owain Arthur, Nazanin Boniadi, Tom Budge,
                        Morfydd Clark</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="ageLimit">Korhatár: </th>
                    <th class = secondcolumn id="ageLimitValue">13+</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="director">Rendező: </th>
                    <th class = secondcolumn id="directorValue">Wayne Yip, Juan Antonio Bayona,
                        Charlotte Brandstrom</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="writer">Író: </th>
                    <th class = secondcolumn id="writerValue">John Ronald Reuel Tolkien</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="scriptWriter">Forgatókönyíró: </th>
                    <th class = secondcolumn id="scriptWriterValue">Jason Cahill, Gennifer Hutchison</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="producer">Producer: </th>
                    <th class = secondcolumn id="producerValue">Ron Ames, Christopher Newman</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="language">Eredeti nyelv: </th>
                    <th class = secondcolumn id="languageValue">Angol</th>
                </tr>
            </table>

            <div class="commentSection">
                <h2>Hozzászólások</h2>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Kiss József</a>
                        <span class="comment-date">2023. március 19., 12:30</span><br>
                        <p>Legjobb!</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Lengyel Mátyás</a>
                        <a class="comment-date">2023. március 15., 01:10</a><br>
                        <p>Alig várom az új évadot!!!</p>
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
                <img class="firsInGalley" src="./img/filmPage/ringsofpower/ringsofpower2.jpg" alt="A hatalom gyűrűi 1. kép"/>
                <img class="secondInGalley" src="./img/filmPage/ringsofpower/ringsofpower3.jpg" alt="A hatalom gyűrűi 2. kép"/>
                <img class="thirdInGalley" src="./img/filmPage/ringsofpower/ringsofpower4.jpg" alt="A hatalom gyűrűi 3. kép"/>
                <img class="fourthInGalley" src="./img/filmPage/ringsofpower/ringsofpower5.jpg" alt="A hatalom gyűrűi 4. kép"/>
            </div>

            <div class="comment">
                * Éppen zajlik a 2. évad forgatása, várhatóan az is 8 részes lesz.<br>
                ** A műsor megtekintése Prime Video-n lehetséges, amihez előfizetés szükséges.<br>
            </div>
        </div>
    </main>
</body>
<?php
include("./navbar.php");
?>
</html>