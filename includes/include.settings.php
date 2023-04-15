<?php
if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $filename = './db/users.txt';

    $file_contents = file_get_contents($filename);
    $users = explode(PHP_EOL, $file_contents);
    $updated_users = [];

    $user_data_changed = false;

    foreach ($users as $user) {
        $user_data = explode(';', $user);

        if ($_SESSION['user'] === $user_data[0]) {
            if ($username !== $user_data[0] || $email !== $user_data[3]) {
                $user_data_changed = true;
                $user_data[0] = $username;
                $user_data[3] = $email;
                $_SESSION['user'] = $username;
            }
            if (!empty($password)) {
                $user_data[2] = $password;
            }
        }

        $updated_users[] = implode(';', $user_data);
    }

    if ($user_data_changed) {
        $updated_file_contents = implode(PHP_EOL, $updated_users);
        file_put_contents($filename, $updated_file_contents);
    }
}

header('Location: ../settings.php');
exit();