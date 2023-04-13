<!DOCTYPE html>

<head>
    <script src="scripts/checking.js"></script>
    <title>Bejelentkezés</title>
</head>
<html lang="en">
<?php
$username = isset($username) ? $username : "";
$name = isset($name) ? $name : "";
$email = isset($email) ? $email : "";
?>
<div id="id01" class="modal">
    <form class="modal-content animate" method="post" action="./includes/include.login.php">
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
    <form method="post" class="modal-content" action="./includes/include.register.php">
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
            </fieldset>
            <div class="clearfix">
                <button type="button" onclick="document.getElementById('registration').style.display='none'"
                    class="cancelbtn">Vissza a bejelentkezéshez</button>
                <button type="submit" class="signupBTN">Regisztráció</button>
            </div>
        </div>

        <div class="profilePictureUpload">
            
        </div>
    </form>
</div>

</html>