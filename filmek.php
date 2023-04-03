<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmek</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/styleLogin.css">
    <link rel="stylesheet" href="./styles/osszMusorStyle.css">
    <script src="./scripts/script.js"></script>
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
        <form method="post" class="modal-content">
            <div class="container">
                <h1>Regisztráció</h1>
                <fieldset>
                    <label>Teljes név <br>
                        <input type="text" placeholder="pl.: Kovács Ilona" name="name" class="formInput firstInput"
                            required></label>
                    <label>Születési dátum: <br>
                        <input type="date" name="date-of-birth" min="1920-01-01" class="formInput" required /></label>
                    <label>E-mail cím<br>
                        <input type="email" placeholder="pl.: kovacsilona@valami.com" name="email" class="formInput"
                            required></label>
                    <label>Jelszó<br>
                        <input type="password" placeholder="Írja be a jelszót" name="psw" class="formInput"
                            required></label>
                    <label>Jelszó újra<br>
                        <input type="password" placeholder="Írja be újra a jelszót" name="psw-repeat" class="formInput"
                            required></label>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('registration').style.display='none'"
                            class="cancelbtn">Vissza a bejelentkezéshez</button>
                        <button type="submit" class="signupbtn">Regisztráció</button>
                    </div>
                </fieldset>
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
            <label for="overlaySearch"></label><input type="search" class="searchbar" id="overlaySearch"
                placeholder="Keresés">
        </div>
    </div>

    <nav class="navBar">
        <div class="searchbarCenter">
            <label for="mainSearch"></label><input type="search" class="searchbar" id="mainSearch"
                placeholder="Keresés">
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
            <button onclick="document.getElementById('id01').style.display='flex'"
                class="loginBTN">Bejelentkezés</button>
        </div>
    </nav>

    <main class="main">
        <section class="section">
            <h1>Kiemelt filmek</h1>
            <table class="film-table">
                <thead class="head">
                    <tr>
                        <th>Képek</th>
                        <th><button onclick="sortTable(1)">Címek</button></th>
                        <th><button onclick="sortTable(2)">Megjelenés éve</button></th>
                        <th><button onclick="sortTable(3)">Értékelés</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="avatar.html"><img src="./img/smallPoster/Avatar2.jpg" alt="Avatar 2"></a></td>
                        <td>Avatar 2</td>
                        <td>2022</td>
                        <td>9.1</td>
                    </tr>
                    <tr>
                        <td><a href="blackadam.html"><img src="./img/smallPoster/BlackAdam.jpg"
                                    alt="Black Adam"></a></td>
                        <td>Black Adam</td>
                        <td>2022</td>
                        <td>8.4</td>
                    </tr>
                    <tr>
                        <td><a href="topgunmaverick.html"><img src="./img/smallPoster/TopGunMaverick.jpg"
                                    alt="Top Gun: Maverick"></a></td>
                        <td>Top Gun: Maverick</td>
                        <td>2022</td>
                        <td>7.8</td>
                    </tr>
                </tbody>
            </table>
            <h2>További filmek</h2>
            <table class="film-table">
                <thead class="head">
                    <tr>
                        <th>Képek</th>
                        <th><button onclick="sortTable(1, 1)">Címek</button></th>
                        <th><button onclick="sortTable(2, 1)">Megjelenés éve</button></th>
                        <th><button onclick="sortTable(3, 1)">Értékelés</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="./img/posters/AllQuietOnTheWesternFront.jpg" alt="All Quiet on the Western Front">
                        </td>
                        <td>All Quiet on the Western Front</td>
                        <td>2022</td>
                        <td>8.2</td>
                    </tr>
                    <tr>
                        <td><img src="./img/posters/BatmanBegins.jpg" alt="Batman Begins"></td>
                        <td>Batman Begins</td>
                        <td>2022</td>
                        <td>9.0</td>
                    </tr>
                    <tr>
                        <td><img src="./img/posters/Elvis.jpg" alt="Elvis"></td>
                        <td>Elvis</td>
                        <td>2022</td>
                        <td>7.5</td>
                    </tr>
                </tbody>
            </table>
        </section>
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