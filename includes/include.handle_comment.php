<?php
date_default_timezone_set('Europe/Budapest');
$valtozo = $_GET['valtozo'];

// Betöltjük a JSON fájlt
$json = file_get_contents('../db/filmek.json');

// A JSON fájlt PHP asszociatív tömbbe alakítjuk
$data = json_decode($json, true);

// Az új komment létrehozása
$newComment = array(
    "profilePicture" => "./img/profiles/default.jpg",
    "name" => "asd",
    "comment" => "asd",
    "commentDate" => date("Y-m-d H:i")
);

// Az új komment hozzáadása a "comments" tömbhöz
$data['movies'][$valtozo]['comments'][] = $newComment;

// A módosított tömb visszaalakítása JSON formátumra
$jsonData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// Az eredmény kiírása a fájlba
file_put_contents('../db/filmek.json', $jsonData);
