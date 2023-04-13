<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

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

$name = $user_data[1];
$email = $user_data[3];

?>

<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmVerzum</title>
  <link rel="icon" type="image/x-icon" href="./img/logo.ico">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/styleUser.css">
  <script src="scripts/script.js"></script>
</head>

<body>
  <?php

  if (!isset($_SESSION)) {
    $_SESSION = array();
  }

  include("./navbar.php");
  $profile_picture_path = get_profile_pictureProfil_path($username);
  ?>

  <main class="main">
    <div class="profileContainer">

      <div class="avatar">
        <img src="<?php echo $profile_picture_path; ?>" alt="Profilkép">
        <h1>
          <?php echo $username; ?>
        </h1>
        <p>
          <?php echo $name; ?><br>
          <?php echo $email; ?>
        </p>
      </div>

      <a href="./settings.php">Profil Szerkesztése</a>
    </div>

    <div class="likedMoviesContainer">
      <table class="likedMovies">

      </table>
    </div>
  </main>

  <?php
  include("./footer.php");
  ?>
</body>

</html>