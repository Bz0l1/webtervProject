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

<body>

  <div id="id01" class="modal">
    <form class="modal-content animate" method="post">
      <div class="container">
        <label>
          <input type="text" placeholder="Felhasználónév" name="uname" class="formInput firstInput" required>
        </label>
        <label>
          <input type="password" placeholder="Jelszó" name="psw" class="formInput" required>
        </label>
        <button type="submit" class="overlayLoginBTN">Bejelentkezés</button>
        <div style="display: flex; justify-content: space-between;">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Mégse</button>
          <button type="button" onclick="document.getElementById('registration').style.display='flex'"
            class="signupBTN">Regisztráció</button>
        </div>
      </div>
    </form>
  </div>

  <div id="registration" class="modal">
    <form class="modal-content">
      <div class="container">
        <h1>Regisztráció</h1>
        <hr>
        <label>Teljes név <br>
          <input type="text" placeholder="pl.: Kovács Ilona" name="name" class="formInput firstInput" required></label>

        <label>Születési dátum: <br>
          <input type="date" name="date-of-birth" min="1920-01-01" class="formInput" /></label> <br />

        <label>E-mail cím<br>
          <input type="email" placeholder="minta@valami.com" name="email" class="formInput" required>
          <br></label>

        <label>Jelszó<br>
          <input type="password" placeholder="Írja be a jelszót" name="psw" class="formInput" required></label>

        <label>Jelszó újra<br>
          <input type="password" placeholder="Írja be újra a jelszót" name="psw-repeat" class="formInput"
            required></label>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('registration').style.display='none'"
            class="cancelbtn">Vissza a bejelentkezéshez</button>
          <button type="submit" class="signupbtn">Regisztráció</button>
        </div>
      </div>
    </form>
  </div>

  <div id="menuOverlay" class="overlay">
    <div id="menuActions">
      <a href="javascript:void(0)" class="closeBTN" onclick="closeNav()">&times;</a>
      <a href="./index.html" id="menuHome">&#8962;</a>
    </div>

    <div class="overlay-content wide-screen">
      <table class="overlayTable">
        <thead>
          <tr>
            <th id="filmek"><a href="filmek.html" class="overlayFilmek">Filmek</a></th>
            <th id="sorozatok"><a href="sorozatok.html" class="overlaySorozatok">Sorozatok</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td headers="filmek"><a href="#" class="overlayT10Film">Top 5 film</a></td>
            <td headers="sorozatok"><a href="#" class="overlayT10Sorozat">Top 5 sorozat</a></td>
          </tr>

          <tr>
            <td headers="filmek"><a href="#" class="overlayFilmRelease">Film megjelenések</a></td>
            <td headers="sorozatok"><a href="#" class="overlaySorozatRelease">Sorozat megjelenések</a></td>
          </tr>

          <tr>
            <td headers="filmek"><a href="#" class="overlayFilmGenre">Film műfaj</a></td>
            <td headers="sorozatok"><a href="#" class="overlaySorozatGenre">Sorozat műfaj</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="overlay-content mobile-screen">
      <a href="filmek.html" class="overlayFilmek">Filmek</a>
      <div class="overlayFilm-dropdown">
        <a href="#" class="overlayT10Film">Top 5 film</a>
        <a href="#" class="overlayFilmRelease">Film megjelenések</a>
        <a href="#" class="overlayFilmGenre">Film műfaj</a>
      </div>

      <a href="sorozatok.html" class="overlaySorozatok">Sorozatok</a>
      <div class="overlaySorozat-dropdown">
        <a href="#" class="overlayT10Sorozat">Top 5 sorozat</a>
        <a href="#" class="overlaySorozatRelease">Sorozat megjelenések</a>
        <a href="#" class="overlaySorozatGenre">Sorozat műfaj</a>
      </div>
    </div>
  </div>

  <div id="searchOverlay" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeSearch()">&times;</a>

    <div class="overlay-content">
      <label for="overlaySearch"></label><input type="search" class="searchbar" id="overlaySearch" placeholder="Keresés">
    </div>
  </div>

  <nav class="navBar">
    <div class="searchbarCenter">
      <label for="mainSearch"></label><input type="search" class="searchbar" id="mainSearch" placeholder="Keresés">
      <button class="searchOverlay-btn" onclick="openSearch()"><img src="img/navbar/searchIcon.svg"
          alt="search"></button>
    </div>

    <div class="leftLogo">
      <a href="index.html" id="logo" title="Kezdőlap">FilmVerzum</a>
    </div>

    <div class="menu">
      <button onclick="openNav()" id="menuBTN">&#9776;Menü</button>
    </div>

    <div class="rightSide">
      <button onclick="document.getElementById('id01').style.display='flex'" class="loginBTN">Bejelentkezés</button>
    </div>
  </nav>
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



  <footer class="lablec">
    <div class="socialMedia">
      <ul>
        <li>
          <a href="https://www.facebook.com" target="_blank">Facebook</a>
        </li>
        <li>
          <a href="https://www.instagram.com" target="_blank">Instagram</a>
        </li>
        <li>
          <a href="https://discord.com" target="_blank">Discord</a>
        </li>
      </ul>
    </div>
    <div class="settings">
      <ul>
        <li>
          <a href="#">Profil</a>
        </li>
        <li>
          <a href="#">Beállítások</a>
        </li>
      </ul>
    </div>
  </footer>
</body>

</html>