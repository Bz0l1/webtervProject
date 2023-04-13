<?php
if (isset($_POST['save_changes'])) {
    $new_username = trim($_POST['username']);
    $new_email = trim($_POST['email']);
    $new_password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);

    if (!empty($new_username) && !empty($new_email) && !empty($new_password)) {
        $filename = './db/users.txt';
        $file_contents = file_get_contents($filename);
        $users = explode(PHP_EOL, $file_contents);
        $new_users = [];

        foreach ($users as $user) {
            $user_data = explode(';', $user);

            if ($username === $user_data[0]) {
                $user_data[0] = $new_username;
                $user_data[1] = $new_password;
                $user_data[3] = $new_email;
            }

            $new_users[] = implode(';', $user_data);
        }

        file_put_contents($filename, implode(PHP_EOL, $new_users));
        echo 'A változtatások mentése sikeres.';
        header("LOCATION: ../settings.php");
    }
}
?>