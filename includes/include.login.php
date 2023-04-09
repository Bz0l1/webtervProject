<?php
session_start();
$errors = [];
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
                $_SESSION["bejelentkezve"] = TRUE;
                header('Location: ../index.php');
                exit();
            }
        }

        if (!$user_found) {
            $errors[] = 'Hibás felhasználónév vagy jelszó.';
        }
    }
}
