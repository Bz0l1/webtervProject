<?php
session_start();
$sessionUser = "";
$password_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

if (isset($_SESSION['user'])) {
    $sessionUser = $_SESSION['user'];
}

// Az aktív felhasználó beolvasása a userData tömbbe
$userData = [];
$usersFile = fopen("../db/users.txt", "r");
if ($usersFile) {
    while (($line = fgets($usersFile)) !== false) {
        $user = explode(";", $line);
        if ($user[0] == $sessionUser) {
            $userData = [
                'username' => $user[0],
                'name' => $user[1],
                'password' => $user[2],
                'email' => $user[3]
            ];
            break;
        }
    }
    fclose($usersFile);
}

// Van módosítás a settings.php beviteli mezeiben, akkor a userData bizonyos értékei a módosított érték alapján változzanak
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'], $_POST['email'])) {
        if ($_POST['username'] !== $userData['username'])
            $userData['username'] = $_POST['username'];
        if ($_POST['email'] !== $userData['email'])
            $userData['email'] = $_POST['email'];
        if ($_POST['password'] !== "" && preg_match($password_pattern, $_POST['password']))
            $userData['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
            
    }

    // az eredeti fájl beolvasása
    $fajl = "../db/users.txt";
    $fp = fopen($fajl, "r");

    // a sorok módosítása
    $megjelenitett_sorok = "";
    while (!feof($fp)) {
        $sor = fgets($fp);
        $sor_tomb = explode(";", $sor);
        if ($sor_tomb[0] == $sessionUser) {
            $sor_tomb[0] = $userData['username'];
            $sor_tomb[1] = $userData['name'];
            $sor_tomb[2] = $userData['password'];
            $sor_tomb[3] = $userData['email'];
            $sor = implode(";", $sor_tomb) . "\n";
        }
        $megjelenitett_sorok .= $sor;
    }

    // a módosított sorok kiírása a fájlba
    file_put_contents($fajl, $megjelenitett_sorok);
    fclose($fp);

    // Az aktív felhasználó frissítése
    $_SESSION['user'] = $userData['username'];
    header("LOCATION: ../settings.php");

}