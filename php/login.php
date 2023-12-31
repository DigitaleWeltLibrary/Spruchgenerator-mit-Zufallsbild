<?php

session_start();

//NOTE Log-in
if (isset($_POST['user']) && isset($_POST['password'])) {
    $settingsdata = file_get_contents("json/settings.json");
    $data = json_decode($settingsdata, true);

    $datauser = $data['login'][0]['user'];
    $datapassword = $data['login'][0]['password'];

    $user = trim($_POST['user']);
    $password = trim($_POST['password']);

    if (password_verify($password, $datapassword) && $user === $datauser) {
        $_SESSION['user'] = $user;
        header('Location: /bhome');
        exit;
    }
}

//NOTE Log-out
if (isset($_GET['action'])) {
    session_unset();
    header('Location: /');
    exit;
}
