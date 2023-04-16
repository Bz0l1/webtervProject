<?php
$errors = [];
$username = '';
$name = '';
$email = '';

// Regisztrációs adatok POSTolása
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ha megvan adva a username, name, psw, email
    if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['psw']) && isset($_POST['psw-repeat']) && isset($_POST['email'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $password_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
        if (!preg_match($password_pattern, $_POST['psw'])) {
            $errors[] = 'A jelszó minimum 8 karakter hosszú legyen, tartalmazzon kis-, és nagybetűket, számokat, és minimum 1 speciális karaktert.';
        }

        if (!preg_match('/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+( [A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/', $_POST['name'])) {
            $errors[] = 'A név nem helyes formátumú (pl. Kovács Ilona).';
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Érvénytelen e-mail cím.';
        }

        if ($_POST['psw'] !== $_POST['psw-repeat']) {
            $errors[] = 'A jelszavak nem egyeznek.';
        }

        // Ha nincs hiba, az adatok a users.txt-be kerülnek
        if (empty($errors)) {
            $filename = '../db/users.txt';
            $separator = ';';

            $hashed_password = password_hash($_POST['psw'], PASSWORD_BCRYPT);

            $user_data = [
                'username' => $_POST['username'],
                'name' => $_POST['name'],
                'password' => $hashed_password,
                'email' => $_POST['email']
            ];

            $file_data = implode($separator, $user_data) . PHP_EOL;
            file_put_contents($filename, $file_data, FILE_APPEND);


            // Sikeres bejelentkezés után a felhasználó visszakerül az index.php-ra
            $_SESSION["bejelentkezve"] = TRUE;
            header('Location: ../index.php');
        } else {
            foreach ($errors as $error) echo 'Error: '.$error;  
        }
    }
    exit();
}