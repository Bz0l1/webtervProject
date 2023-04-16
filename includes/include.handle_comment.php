<?php

// Változók beállítása a beérkező POST adatok alapján, változó = film sorszáma
$comment = $_POST['valodicomment'];
$valtozo = $_POST["valtozo"];
session_start();

// Felhasználói adatok betöltése a felhasználónév alapján
function load_user_data($username): ?array
{
  $filename = '../db/users.txt';

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

include('./include.profilPicture.php');

$user = $_SESSION['user'];
date_default_timezone_set('Europe/Budapest');

// JSON fájl betöltése
$json = file_get_contents('../db/filmek.json');
$data = json_decode($json, true);

// Az új komment létrehozása
$newComment = array(
    "profilePicture" => substr(get_profile_pictureProfil_path($user), 1),
    "name" => $user,
    "comment" => $comment,
    "commentDate" => date("Y-m-d H:i")
);

// Az új komment hozzáadása a "comments"-hez
$data['movies'][$valtozo]['comments'][] = $newComment;

// A módosított tömb visszaalakítása JSON formátumra
$jsonData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// JSON-be írás
file_put_contents('../db/filmek.json', $jsonData);

header("Location: ../secondpage.php?valtozo=" . urlencode($valtozo));
exit();