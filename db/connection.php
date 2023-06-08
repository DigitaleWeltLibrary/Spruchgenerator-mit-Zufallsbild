<?php

//NOTE $verbindung
$db_name = "./db/content.db";
$serverdaten = "sqlite:$db_name";

try {
    $verbindung = new PDO($serverdaten);
} catch (Exception $fehler) {
    print $fehler->getMessage();
}

