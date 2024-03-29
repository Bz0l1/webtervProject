<?php

// Ha nincs elindítva a session
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Az 'include.profilPicture.php' csak egyszer includolja, mivel a get_profile_pictureNavbar_path csak egyszer kell ó, hogy lefusson
include_once('./includes/include.profilPicture.php');
?>

<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmVerzum</title>
  <link rel="icon" type="image/x-icon" href="img/logo.ico">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/styleLogin.css">
  <script src="scripts/script.js"></script>
</head>

<body>

  <?php
  if (!isset($_SESSION)) {
    $_SESSION = array();
  }

  include('./login.php');
  ?>

  <div id="menuOverlay" class="overlay">
    <div id="menuActions">
      <a href="javascript:void(0)" class="closeBTN" onclick="closeNav()">&times;</a>
      <a href="index.php" id="menuHome">&#8962;</a>
    </div>

    <div class="overlay-content wide-screen">
      <table class="overlayTable">
        <thead>
          <tr>
            <th id="filmek"><a href="filmek.php" class="overlayFilmek">Filmek</a></th>
            <th id="sorozatok"><a href="sorozatok.php" class="overlaySorozatok">Sorozatok</a></th>
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
      <a href="filmek.php" class="overlayFilmek">Filmek</a>
      <div class="overlayFilm-dropdown">
        <a href="#" class="overlayT10Film">Top 5 film</a>
        <a href="#" class="overlayFilmRelease">Film megjelenések</a>
        <a href="#" class="overlayFilmGenre">Film műfaj</a>
      </div>

      <a href="sorozatok.php" class="overlaySorozatok">Sorozatok</a>
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
      <label for="mainSearch"></label><input type="search" class="searchbar" id="mainSearch" placeholder="Keresés">
      <button class="searchOverlay-btn" onclick="openSearch()"><img src="img/navbar/searchIcon.svg"
          alt="search"></button>
    </div>

    <div class="leftLogo">
      <a href="index.php" id="logo" title="Kezdőlap">FilmVerzum</a>
    </div>

    <div class="menu">
      <button onclick="openNav()" id="menuBTN">&#9776;Menü</button>
    </div>

    <div class="rightSide">
      <?php
      // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
      if (isset($_SESSION['bejelentkezve']) && $_SESSION['bejelentkezve']) {
        // Ha be van jelentkezve, akkor megjelenítjük a felhasználó profilképét
        $profile_picture = $profile_picture = get_profile_pictureNavbar_path($_SESSION['user']);
        $logout_picture = "./img/navbar/logout.png";
        $settings_picture = "./img/navbar/setting.png";
        $admin_picture = "./img/navbar/admin.png";

        echo '  
          <div style="display: inline-block;">
              <a href="./profil.php" target="_self"><img src="' . $profile_picture . '" alt="Profilkép" id="profilePicture"></a>
          </div>
          <div style="display: inline-block;">
          <a href="settings.php"><img src="' . $settings_picture . '" alt="Beállítások" id="settings" title="Beállítások"></a>
          </div>
        ';

        // Ha a felhasználó az admin
        if (isset($_SESSION['admin']) && $_SESSION['admin']) {
          echo '
            <div style="display: inline-block;">
              <a href="admin.php"><img src="'. $admin_picture. '" alt="Admin" id="admin" title="Admin"></a>
            </div>
          ';
        }
        echo '
          <div style="display: inline-block;">
              <form method="post" action="./includes/include.logout.php">
                  <input type="image" src="' . $logout_picture . '" alt="Logout" id="logout" title="Kijelentkezés">
              </form>
          </div>
        ';


      } else {
        // Ha nincs bejelentkezve, akkor megjelenítjük a Bejelentkezés gombot
        echo '<button onclick="document.getElementById(\'id01\').style.display=\'flex\'" class="loginBTN">Bejelentkezés</button>';
      }
      ?>
    </div>
  </nav>
</body>

</html>