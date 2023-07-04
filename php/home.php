<?php

session_start();

//NOTE bilder
$dircontent = scandir('assets/content_img/');
$imgs = count($dircontent) - 1;
$roundnumber = rand(2, $imgs);


$bild = $dircontent[$roundnumber];

if (!isset($_SESSION['max_id'])) {
    //NOTE spruch
    $SELECT = "SELECT max(id)
FROM sprueche";
    $maxid = $verbindung->prepare($SELECT);
    $maxid->execute();
    $ergebnis = $maxid->fetchAll();

    $_SESSION['max_id'] = $ergebnis[0][0];
}

$id = rand(2, $_SESSION['max_id']);

$SELECT = "SELECT spruch
FROM sprueche WHERE id = :id";
$maxid = $verbindung->prepare($SELECT);
$maxid->bindParam(':id', $id);
$maxid->execute();
$spruch = $maxid->fetchAll();
