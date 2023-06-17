<?php


if (isset($_POST['titel'])) {

    session_start();

    $jsonFilePath = "./json/settings.json";
    $settingsdata = file_get_contents($jsonFilePath);
    $settings = json_decode($settingsdata, true);

    $settings['layoutdata'][0]['pagetitle'] = trim($_POST['titel']);
    $settings['layoutdata'][0]['keywords'] = trim($_POST['keywords']);
    $settings['layoutdata'][0]['description'] = trim($_POST['description']);

    $settings['footer'][0]['impressum'] = trim($_POST['impressum']);
    $settings['footer'][0]['datenschutz'] = trim($_POST['datenschutz']);
    $settings['footer'][0]['agbs'] = trim($_POST['agbs']);

    $updatedSettingsData = json_encode($settings, JSON_PRETTY_PRINT);

    file_put_contents($jsonFilePath, $updatedSettingsData);

    if (is_string($_SESSION['ip'])) header('Location: /settings');
    header('Location: /');
}
