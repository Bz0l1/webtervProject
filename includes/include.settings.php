<?php
session_start();
$sessionUser = "";

if (isset($_SESSION['user'])) {
    $sessionUser = $_SESSION['user'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['username'], $_POST['email'])) {
        $filename = '../db/users.txt';

        $file_contents = file_get_contents($filename);
        $users = explode(PHP_EOL, $file_contents);
        $user_data = [];
        foreach ($users as $user) {
            $user_data = explode(';', $user);

            if ($sessionUser === $user_data[0]) {
                if ($_POST['username'] !== $user_data[0]) {
                    $user_data[0] = $_POST['username'];
                }
            }
        }
    }

    foreach ($)
}