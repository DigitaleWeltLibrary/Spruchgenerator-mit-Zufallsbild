<?php

//NOTE spruch
$SELECT = "SELECT spruch,id
FROM sprueche";
$maxid = $verbindung->prepare($SELECT);
$maxid->execute();
$ergebnis = $maxid->fetchAll();


//NOTE spruch löschen
if (isset($_GET['id']) && $_GET['type'] === 'loeschen') {
    $loeschenid = "DELETE FROM sprueche WHERE id=:id";
    $loeschen = $verbindung->prepare($loeschenid);
    $loeschen->bindParam(':id', $_GET['id']);
    $loeschen->execute();

    ('Location: /bhome');
}

//NOTE spruch neu
if (isset($_GET['newcontent'])) {


    $senden = "INSERT INTO sprueche (spruch) VALUES (:spruch)";
    $lekerstellen = $verbindung->prepare($senden);
    $lekerstellen->bindparam(':spruch', $_GET['newcontent']);
    $lekerstellen->execute();

    header('Location: /bhome');
}
