<?php


if (isset($_POST['titel'])) {
    $jsonFilePath = "json/settings.json";
    $settingsdata = file_get_contents($jsonFilePath);
    $settings = json_decode($settingsdata, true);

    $settings['layoutdata'][0]['pagetitle'] = trim($_POST['titel']);
    $settings['layoutdata'][0]['keywords'] = trim($_POST['keywords']);
    $settings['layoutdata'][0]['description'] = trim($_POST['description']);

    $updatedSettingsData = json_encode($settings, JSON_PRETTY_PRINT);

    file_put_contents($jsonFilePath, $updatedSettingsData);

    header('Location: /settings');
}
