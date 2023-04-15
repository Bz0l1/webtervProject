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
$pass = $user_data[2];
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
    <link rel="stylesheet" href="styles/styleSettings.css">
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cancelButton = document.getElementById('cancelBTN');
        cancelButton.addEventListener('click', function() {
            location.reload();
        });
    });
</script>
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
        <form action="/includes/include.settings.php" method="POST">
            <fieldset class="ProfilSettingsContainer">
                <legend>
                    <?php echo $username; ?> adatai
                </legend>
                <div class="userDataSettings">
                    <p>Felhasználónév:</p>
                    <input type="checkbox" id="username_public" name="username_public">
                    <label for="username_public">Publikus?</label>
                    <input type="text" id="username" name="username" placeholder="Felhasználónév"
                        value="<?php echo $username; ?>">

                    <p>Email:</p>
                    <input type="checkbox" id="email_public" name="email_public">
                    <label for="email_public">Publikus?</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">

                    <p>Jelszó:</p>
                    <input type="checkbox" id="password_public" name="password_public">
                    <label for="password_public">Publikus?</label>
                    <input type="password" id="password" name="password" placeholder="********">
                </div>
                <div class="profilePicture">
                    <img src="<?php echo $profile_picture_path; ?>" alt="Profilkép" class="profile-img">
                    <p>Profilkép módosítása</p>
                    <br>
                    <input type="file" id="profile_picture" name="profile_picture" accept=".jpg, .jpeg, .png">
                    <p>Csak .jpg .png kiterjesztésű fájlt adhatsz meg.</p>
                </div>
            </fieldset>
            <div class="buttons">
                <button type="button" id="cancelBTN">Mégse</button>
                <button type="submit" id="saveBTN">Mentés</button>
            </div>
        </form>
    </main>

    <?php
    include("./footer.php");
    ?>
</body>

</html>