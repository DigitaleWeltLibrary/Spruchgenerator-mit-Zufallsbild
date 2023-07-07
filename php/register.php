<?php

//NOTE User anlegen
if (isset($_POST['user'])) {
    $jsonFilePath = "json/settings.json";
    $settingsdata = file_get_contents($jsonFilePath);
    $settings = json_decode($settingsdata, true);


    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $settings['login'][0]['user'] = trim($_POST['user']);
    $settings['login'][0]['password'] =     $password;



    $updatedSettingsData = json_encode($settings, JSON_PRETTY_PRINT);

    file_put_contents($jsonFilePath, $updatedSettingsData);

    if ($pagetitle === "") {
        require_once('pages/edit.php');
        exit;
    }

    header('Location: /bhome');
}
