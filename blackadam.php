<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Black Adam</title>
    <link rel="stylesheet" href="styles/styleFilmpages.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<?php
include("./navbar.php");
?>
<body>
    <main class="main">
        <div class="mainPart">
            <h1>Black Adam</h1>
            <div class = "szoveg">Majdnem 5,000 évvel azután, hogy az egyiptomi istenek mindenható erejével felruházták
                (és ugyanolyan gyorsan börtönbe zárták) Black Adam felszabadul földi sírjából, készen arra, hogy sajátos
                igazságszolgáltatási formáját kibontakoztassa a modern világban.<br></div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/AP4GC0VDQiI" allowfullscreen></iframe><br>
                <img src="./img/posters/BlackAdam.jpg" alt="Black Adam"/>
            </div>
        </div>

        <div class="secondary">
            <table class="tableFilmek">
                <caption>A film adatai:</caption>
                <tr>
                    <th class = firstcolumn id="genre">Műfaj: </th>
                    <th class = secondcolumn id="genreValue">Akció, Kaland, Fantázia</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="premier">Bemutató ideje: </th>
                    <th class = secondcolumn id="premierValue">2022. november 20.</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="watchTime">Játékidő: </th>
                    <th class = secondcolumn id="watchTimeValue">125 perc</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="stars">Főszereplők: </th>
                    <th class = secondcolumn id="starsValue">Dwayne Johnson, Aldis Hodge, Pierce Brosnan</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="ageLimit">Korhatár: </th>
                    <th class = secondcolumn id="ageLimitValue">16+</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="director">Rendező: </th>
                    <th class = secondcolumn id="directorValue">Jaume Collet-Serra</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="writer">Író: </th>
                    <th class = secondcolumn id="writerValue">Adam Sztykiel, Rory Haines, Sohrab Noshirvani</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="manifacturer">Gyártó: </th>
                    <th class = secondcolumn id="manifacturerValue">New Line Cinema, DC Films, Seven Bucks Productions,
                        FlynnPictureCo</th>
                </tr>
                <tr>
                    <th class = firstcolumn id="distributor">Forgalmazó: </th>
                    <th class = secondcolumn id="distributorValue">Warner Bros. Pictures</th>
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
                        <a class="userRealName">Füles Jancsi</a>
                        <span class="comment-date">2023. március 14., 11:10</span><br>
                        <p>Egynek elment.</p>
                        <br><br>
                    </div>
                </div>
                <div class="fullRealComment">
                    <img class="userAvatar" src="./img/profilepicture.jpg" alt="Felhasználó avatarja">
                    <div class="comment-body">
                        <a class="userRealName">Kovács Attila</a>
                        <a class="comment-date">2023. március 15., 14:00</a><br>
                        <p>Nem kiemelkedő de végig lehetett nézni.</p>
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
                <img class="firsInGalley" src="./img/filmPage/blackadam/blackadam3.jpg" alt="Black Adam 1. kép"/>
                <img class="secondInGalley" src="./img/filmPage/blackadam/blackadam4.jpg" alt="Black Adam 2. kép"/>
                <img class="thirdInGalley" src="./img/filmPage/blackadam/blackadam7.jpg" alt="Black Adam 3. kép"/>
                <img class="fourthInGalley" src="./img/filmPage/blackadam/blackadam6.jpg" alt="Black Adam 4. kép"/>
            </div>
        </div>
    </main>
</body>
<?php
include("./footer.php");
?>
</html>