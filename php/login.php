<?php
header('Content-Type: text/html; charset=utf-8');

$users = [
    [
        'username' => 'zoli',
        'password' => 'jelszo12345678'
    ],
    [
        'username' => 'adam',
        'password' => '12345678jelszo'
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $isLoggedIN = false;

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $isLoggedIN = true;
            break;
        }
    }

    if ($isLoggedIN) {
        echo "SIKER";
        exit();
    } else {
        echo "WRONG";
        exit();
    }
}
?>