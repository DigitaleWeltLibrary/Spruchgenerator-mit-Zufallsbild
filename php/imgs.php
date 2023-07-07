<?php

$imgs = scandir('assets/content_img/');
$count = count($imgs) - 1;


//NOTE Bild löschen
if (isset($_GET['img']) && file_exists('assets/content_img/' . $_GET['img'])) {
    unlink('assets/content_img/' . $_GET['img']);
    header('Location: /imgs');
}

//NOTE Bild hochladen
if (isset($_FILES['uploading'])) {
    $ziel = "assets/content_img/";
    $zieldatei = $ziel . basename($_FILES["uploading"]["name"]);
    move_uploaded_file($_FILES["uploading"]["tmp_name"], $zieldatei);
}
