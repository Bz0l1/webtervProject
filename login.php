<?php
$errors = [];
$username = '';
$name = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['psw']) && isset($_POST['psw-repeat']) && isset($_POST['email'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $password_pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
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

        if (empty($errors)) {
            $filename = 'db/users.txt';
            $separator = ';';

            $hashed_password = password_hash($_POST['psw'], PASSWORD_BCRYPT);

            $user_data = [
                'username' => $_POST['username'],
                'name' => $_POST['name'],
                'password' => $hashed_password,
                'email' => $_POST['email'],
                'is_admin' => 0
            ];

            $file_data = implode($separator, $user_data) . PHP_EOL;
            file_put_contents($filename, $file_data, FILE_APPEND);

            header('Location: index.php');
            $_SESSION["bejelentkezve"] = TRUE;
            exit();
        }
    }
}
?>

<!DOCTYPE html>

<head>
    <script src="scripts/checking.js"></script>
    <title>Bejelentkezés</title>
</head>
<html lang="en">
<div id="id01" class="modal">
    <form class="modal-content animate" method="post" action="login.php">
        <div class="container">
            <label>
                <input type="text" placeholder="Felhasználónév" name="uname" class="formInput firstInput" required>
            </label>
            <label>
                <input type="password" placeholder="Jelszó" name="loginPSW" class="formInput" required>
            </label>
            <button type="submit" class="overlayLoginBTN">Bejelentkezés</button>
            <div style="display: flex; justify-content: space-between;">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Mégse</button>
                <button type="button" onclick="document.getElementById('registration').style.display='flex'"
                        class="signupBTN">Regisztráció</button>
            </div>
        </div>
    </form>
</div>

<div id="registration" class="modal">
    <form method="post" class="modal-content" action="login.php">
        <div class="container">
            <h1>Regisztráció</h1>
            <fieldset>
                <label><br> Felhasználónév <br>
                    <input type="text" name="username" class="formInput firstInput"
                           value="<?php echo htmlspecialchars($username); ?>" required>
                    <span class="error-message"></span></label>
                <label><br> Teljes név <br>
                    <input type="text" placeholder="pl.: Kovács Ilona" name="name" class="formInput"
                           value="<?php echo htmlspecialchars($name); ?>" required>
                    <span class="error-message"></span>
                </label>

                <label><br> E-mail cím <br>
                    <input type="email" placeholder="pl.: kovacsilona@valami.com" name="email" class="formInput"
                           value="<?php echo htmlspecialchars($email); ?>" required>
                    <span class="error-message"></span>
                </label>

                <label><br> Jelszó <br>
                    <input type="password" placeholder="Írja be a jelszót" name="psw" class="formInput" required>
                </label>

                <label><br> Jelszó újra <br>
                    <input type="password" placeholder="Először adjon meg egy megfelelő jelszót!" name="psw-repeat"
                           class="formInput" disabled="disabled" required>
                    <span class="error-message"><br></span>
                </label>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('registration').style.display='none'"
                            class="cancelbtn">Vissza a bejelentkezéshez</button>
                    <button type="submit" class="signupbtn">Regisztráció</button>
                </div>
            </fieldset>
        </div>
    </form>
</div>
</html>