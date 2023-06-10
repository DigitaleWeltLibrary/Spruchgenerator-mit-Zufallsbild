<?php

if (isset($_POST['titel'])) {
    $file = 'php/settingsdata.php';
    $lines = file($file);

    $lines[3] = "\$pagetitle ='" . trim($_POST['titel']) . "';";

    $lines[4] = "\$keywords ='" .  trim($_POST['keywords']) . "';";

    $lines[5] = "\$description ='" .  trim($_POST['description']) . "';";

    $fileHandle = fopen($file, 'w');
    fwrite($fileHandle, implode('', $lines));
    fclose($fileHandle);
    header('Location: /settings');
}
