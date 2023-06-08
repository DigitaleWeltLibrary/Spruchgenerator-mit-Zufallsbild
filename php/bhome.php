<?php

//NOTE spruch
$SELECT = "SELECT spruch,id
FROM sprueche";
$maxid = $verbindung->prepare($SELECT);
$maxid->execute();
$ergebnis = $maxid->fetchAll();


if (isset($_GET['id']) && $_GET['type'] === 'loeschen') {
    //NOTE spruch
    $loeschenid = "DELETE FROM sprueche WHERE id=:id";
    $loeschen = $verbindung->prepare($loeschenid);
    $loeschen->bindParam(':id', $_GET['id']);
    $loeschen->execute();

    header('Location: /bhome');
}
