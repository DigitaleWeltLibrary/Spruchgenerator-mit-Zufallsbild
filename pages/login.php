<?php
require './function/img.php';

?>


<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="assets/layout_img/<?= $tapicon ?>" type="image/x-icon">
    <meta name="description" content="Hier findest du einen Spruch, der dir deinen Tag verbessert.">
    <meta name="keywords" content="Affirmation, Sprüche, Spruch, Spruch des Tages">
</head>

<body>

    <main class="login">
        <form action="php/auswerten.php" method="post">
            <div>
                <img src='assets/layout_img/<?= $tapicon ?>' alt='Tapicon' loading='lazy'>

            </div>
            <label for="user">User
                <input type="text" name="user" id="" placeholder="User">
            </label>
            <label for="password">Passwort
                <input type="password" name="password" id="" placeholder="geheim">
            </label>
            <input type="submit" value="Einlogen">
        </form>

    </main>
    <footer>
        <a href="https://herzengel.at/impressum-von-herzengel-at/" target="_blank">Impressum</a>
        <a href="https://herzengel.at/datenschutz/" target="_blank">Datenschutz</a>
        <a href="https://herzengel.at/agb-vom-herzengel-at/" target="_blank">AGB</a>
    </footer>
</body>

</html>

<?php



?>