<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <title>Avatar: A víz útja</title>
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
      <h1>Avatar: A víz útja</h1>
      <div class="szoveg"> Avatar: A víz útja több mint egy évtizeddel az első rész eseményeit követően meséli el
        a Sully család (Jake, Neytiri és gyermekeik) történetét; a rájuk leselkedő veszélyeket, az életben
        maradásért vívott harcaikat, az őket sújtó tragédiákat és azt, meddig képesek elmenni, hogy biztonságban
        tudhassák egymást.<br></div>

      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/VjimL6Yq0rA" allowfullscreen></iframe><br>
        <img src="./img/posters/Avatar2.jpg" alt="Avatar: A víz útja borítókép" />
      </div>
    </div>

    <div class="secondary">
      <div class="tables">
      <table class="tableFilmek">
        <caption>A film adatai:</caption>
        <tr>
          <th class=firstcolumn id="originalTitle">Eredeti cím: </th>
          <th class=secondcolumn id="originalTitleValue">Avatar: The Way of Water</th>
        </tr>
        <tr>
          <th class=firstcolumn id="genre">Műfaj: </th>
          <th class=secondcolumn id="genreValue">Kaland, Fantázia, Sci-Fi</th>
        </tr>
        <tr>
          <th class=firstcolumn id="premier">Bemutató ideje: </th>
          <th class=secondcolumn id="premierValue">2022. december 15.</th>
        </tr>
        <tr>
          <th class=firstcolumn id="watchTime">Játékidő: </th>
          <th class=secondcolumn id="watchTimeValue">193 perc</th>
        </tr>
        <tr>
          <th class=firstcolumn id="stars">Főszereplők: </th>
          <th class=secondcolumn id="starsValue">Zoe Saldana, Sam Worthington, Sigourney Weaver</th>
        </tr>
        <tr>
          <th class=firstcolumn id="ageLimit">Korhatár: </th>
          <th class=secondcolumn id="ageLimitValue">16+</th>
        </tr>
        <tr>
          <th class=firstcolumn id="director">Rendező: </th>
          <th class=secondcolumn id="directorValue">James Cameron</th>
        </tr>
        <tr>
          <th class=firstcolumn id="writer">Író: </th>
          <th class=secondcolumn id="writerValue">James Cameron</th>
        </tr>
        <tr>
          <th class=firstcolumn id="manifacturer">Gyártó: </th>
          <th class=secondcolumn id="manifacturerValue">USA 2022</th>
        </tr>
        <tr>
          <th class=firstcolumn id="distributor">Forgalmazó: </th>
          <th class=secondcolumn id="distributorValue">20th Century Studios</th>
        </tr>
        <tr>
          <th class=firstcolumn id="language">Eredeti nyelv: </th>
          <th class=secondcolumn id="languageValue">Angol</th>
        </tr>
      </table>
      
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
            <label for="felhasznalovelemenye"></label><textarea placeholder="Írd le a véleményed!" id="felhasznalovelemenye" name="valodicomment" maxlength="200"></textarea> <br/>
            <input type="reset" id="submit-btn" value="Küldés"/>
            </form>
          </div>
        </div>
      </div>

    </div>
      <div class="photo-gallery">
        <img class="firsInGalley" src="./img/filmPage/avatar/avatar2.jpg" alt="Avatar 1. kép" />
        <img class="secondInGalley" src="./img/filmPage/avatar/avatar3.jpg" alt="Avatar 2. kép" />
        <img class="thirdInGalley" src="./img/filmPage/avatar/avatar4.jpg" alt="Avatar 3. kép" />
        <img class="fourthInGalley" src="./img/filmPage/avatar/avatar5.jpg" alt="Avatar 4. kép" />
      </div>
    </div>
  </main>
</body>
<?php
include("./navbar.php");
?>
</html>