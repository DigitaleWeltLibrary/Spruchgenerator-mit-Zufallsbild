<?php

//NOTE function header img
function headerimg(array $header): int
{
    $type = explode('.', $header[2]);
    if ($type !== 'tapicon') return 2;
    return 3;
}

//NOTE Header img
$imgdir = scandir('assets/layout_img/');
$header = headerimg($imgdir);
$headerimg = $imgdir[$header];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['tapicon'])) {
        unlink("assets/layout_img/" . $tapicon);
        $ziel = "assets/layout_img/";
        $file = $_FILES['tapicon'];
        $extension = pathinfo($file["name"], PATHINFO_EXTENSION);
        $newName = "tapicon." . $extension;
        $zieldatei = $ziel . $newName;
        move_uploaded_file($file["tmp_name"], $zieldatei);
        $tapicon = $newName;
        header('Location: /layout');
    }

    if (isset($_FILES['headerimg'])) {
        $ziel = "assets/layout_img/";
        $file = $_FILES['headerimg'];
        $extension = pathinfo($file["name"], PATHINFO_EXTENSION);
        $newName = "header." . $extension;
        $zieldatei = $ziel . $newName;
        unlink("assets/layout_img/" . $zieldatei);
        move_uploaded_file($file["tmp_name"], $zieldatei);
        $headerimg = $newName;
        header('Location: /layout');
    }
}
