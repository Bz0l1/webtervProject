<?php
session_start();
$error = "";
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['uname']) && isset($_POST['loginPSW'])) {
        $username = $_POST['uname'];
        $password = $_POST['loginPSW'];

        $filename = '../db/users.txt';
        $separator = ';';

        $file_contents = file_get_contents($filename);
        $users = explode(PHP_EOL, $file_contents);

        $user_found = false;
        foreach ($users as $user) {
            $user_data = explode($separator, $user);

            if ($username === $user_data[0] && password_verify($password, $user_data[2])) {
                $user_found = true;
                if ($username === 'admin') {
                    $_SESSION["admin"] = true;
                } else {
                    $_SESSION["admin"] = false;
                }
                $_SESSION["bejelentkezve"] = true;
                header('Location: ../index.php');
                exit();
            }
        }

        if (!$user_found) {
            $error = 'Hibás felhasználónév vagy jelszó.';
            echo $error;
            exit();
        }
    }
}
