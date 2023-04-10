<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmVerzum</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleMain.css">
    <link rel="stylesheet" href="styles/styleLogin.css">
    <script src="scripts/script.js"></script>
</head>

<?php

if (!isset($_SESSION)) {
    $_SESSION = array();
  }

include("./navbar.php");
?>


<?php
include("./footer.php");
?>
</html>