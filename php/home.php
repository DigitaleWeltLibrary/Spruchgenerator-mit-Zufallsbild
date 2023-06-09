<?php

//NOTE bilder
$dircontent = scandir('assets/content_img/');
$imgs = count($dircontent) - 1;
$roundnumber = rand(2, $imgs);


$bild = $dircontent[$roundnumber];

//NOTE spruch
$SELECT = "SELECT max(id)
FROM sprueche";
$maxid = $verbindung->prepare($SELECT);
$maxid->execute();
$ergebnis = $maxid->fetchAll();

$maxid = $ergebnis[0][0];
$id = rand(2, $maxid);

$SELECT = "SELECT spruch
FROM sprueche WHERE id = :id";
$maxid = $verbindung->prepare($SELECT);
$maxid-> bindParam(':id',$id);
$maxid->execute();
$spruch = $maxid->fetchAll();
